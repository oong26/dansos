<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\MasyarakatModel;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Session;
use Alert;

class PasswordResetLinkController extends Controller
{
    /**
     * Display the password reset link request view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.forgot-password');
    }

    /**
     * Handle an incoming password reset link request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function check(Request $request)
    {
        $request->validate([
            'nik' => ['required'],
        ]);

        $user = MasyarakatModel::where('nik', $request->nik)->first();
        if ($user != null) {
            Session::put('id', $user->id);
            // return view('auth.form-forgot-password',compact('user'));
            return redirect()->route('getupdate.user');
        }else{
            return back()->withErrors('NIK tidak ditemukan');
        }
    }
    public function getupdateUser()
    {
        return view('auth.form-forgot-password');
    }
    public function updateUser(Request $request)
    {
        // return $request;
        $request->validate([
            'password' => 'min:6|required_with:konfirmasi_password|same:konfirmasi_password',
            'konfirmasi_password' => 'min:6',
            ]);
        try {
            $user = MasyarakatModel::find($request->id_user);
            $user->password = Hash::make($request->password);
            $user->update();
            session()->forget('id');
            Alert::success('Selamat Datang', 'Berhasil mengganti password.');
            return redirect()->route('beranda');
        } catch (Exception $e) {
            return redirect()->back()->withErrors('Terjadi kesalahan.');
        }
    }

}
