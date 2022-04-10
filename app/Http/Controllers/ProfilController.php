<?php

namespace App\Http\Controllers;

use App\Models\MasyarakatModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ProfilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = MasyarakatModel::where('nik', Session::get('nik'))->first();
        return view('profil.index',compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $user =  MasyarakatModel::where('nik', $id)->first();
       return view('profil.edit',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'nama' => 'required|max:50',
            'nik' => 'required|max:16',
            'alamat' => 'required|max:255',
            'jenis_kelamin' => 'required',
            'tgl_lahir' => 'required|max:10',
            'no_hp' => 'required|max:15',
        ]);

        $user = MasyarakatModel::where('nik',$id)->update([
            'nik' => $request->nik,
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'jenis_kelamin' => $request->jenis_kelamin,
            'tanggal_lahir' => $request->tgl_lahir,
            'no_hp' => $request->no_hp,
            'status' => 'masyarakat',
        ]);

        // Auth::login($user);

        // return redirect(RouteServiceProvider::HOME);
        return redirect()->route('profil.index')->withStatus('Berhasil mengganti profil.');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
