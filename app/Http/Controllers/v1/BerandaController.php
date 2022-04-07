<?php

namespace App\Http\Controllers\v1;

use App\Http\Controllers\Controller;
use App\Models\PenerimaanDana;
use Illuminate\Http\Request;

class BerandaController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function riwayat(Request $request)
    {
        if(\Session::get('nik') !== null) {
            $data = PenerimaanDana::where('nik', \Session::get('nik'))->orderBy('status')->get();

            return view('riwayat.index', compact('data'));
        }
        else
            return redirect('/login');
    }
}
