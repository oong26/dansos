<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Models\MasyarakatModel;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Events\LoginHistory;
use Illuminate\Support\Facades\Session;
use Alert;
use Illuminate\Support\Facades\Hash;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     *
     * @param  \App\Http\Requests\Auth\LoginRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(LoginRequest $request)
    {
        // $request->authenticate();
        $user = MasyarakatModel::where('nik', $request->nik)->first();

        if($user != null ) {
            if (Hash::check($request->password,$user->password)) {
               if ($user->status === 'masyarakat') {
                    $user = MasyarakatModel::where('nik', $request->nik)->first();
                    event(new Auth($user));
                    $request->session()->regenerate();
                    // $token = $user->createToken('token')->plainTextToken;
                    // Session::put('token', $token);
                    Session::put('nik', $user->nik);
                    Session::put('nama', $user->nama);
                    Alert::success('Selamat Datang', 'Berhasil masuk.');
                    return redirect()->intended(RouteServiceProvider::HOME);
               }else{
                   return back()->withErrors('Belum diverifikasi.');
               }
            }else{
                return back()->withErrors('Password terjadi kesalahan.');
            }
        }
        else {
            return back()->withErrors('NIK tidak ditemukan');
        }
    }

    /**
     * Destroy an authenticated session.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Request $request)
    {
        session()->forget('nama');
        if (Session::get('nama') != null) {
            return redirect('/');
        }else{
            return redirect('/')->withStatus('Berhasil masuk.');
        }
        // Auth::guard('web')->logout();

        // $request->session()->invalidate();

        // $request->session()->regenerateToken();

    }
}
