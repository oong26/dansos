<?php

namespace App\Http\Controllers\v1;

use App\Http\Controllers\Controller;
use App\Models\Artikel;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    public function index(Request $request)
    {
        if($request->q !== null)
            $artikel = Artikel::where('title', 'LIKE', '%'.$request->q.'%')->orderBy('created_at', 'DESC')->get();
        else
            $artikel = Artikel::orderBy('created_at', 'DESC')->get();

        return view('berita.index', compact('artikel'));
    }

    public function detail($slug)
    {
        $data = Artikel::where('slug', $slug)->first();
        $artikel = Artikel::where('slug', '!=', $slug)->limit(3)->orderBy('created_at', 'DESC')->get();

        return view('berita.detail', compact('data', 'artikel'));
    }
}
