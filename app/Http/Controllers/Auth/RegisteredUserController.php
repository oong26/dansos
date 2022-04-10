<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\MasyarakatModel;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Alert;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required|max:50',
            'password' => 'min:6|required_with:konfirmasi_password|same:konfirmasi_password',
            'konfirmasi_password' => 'min:6',
            'nik' => 'required|unique:masyarakat,nik|max:16',
            'alamat' => 'required|max:255',
            'jenis_kelamin' => 'required',
            'tgl_lahir' => 'required|max:10',
            'no_hp' => 'required|unique:masyarakat,no_hp|max:15',
        ]);

        $user = MasyarakatModel::insert([
            'nik' => $request->nik,
            'nama' => $request->nama,
            'password' => Hash::make($request->password),
            'alamat' => $request->alamat,
            'jenis_kelamin' => $request->jenis_kelamin,
            'tanggal_lahir' => $request->tgl_lahir,
            'no_hp' => $request->no_hp,
            'status' => 'masyarakat',
        ]);

        event(new Registered($user));
        // Auth::login($user);

        // return redirect(RouteServiceProvider::HOME);
        Alert::success('Berhasil mendaftar', 'Silahkan menunggu validasi 2x24 jam.');
        return redirect('/');
    }
}
