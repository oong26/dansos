<?php

namespace App\Http\Controllers\v1;

use App\Http\Controllers\Controller;
use App\Models\PengaduanModel;
use Exception;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;

class PengaduanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pengajuan.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request;
        $request->validate([
            'nik' => 'required',
            'nama' => 'required',
            'no_hp' => 'required|max:13',
            'perihal' => 'required',
        ]);
        try {
            $tambahPengaduan = new PengaduanModel;
            $tambahPengaduan->nik = $request->nik;
            $tambahPengaduan->nama = $request->nama;
            $tambahPengaduan->no_hp = $request->no_hp;
            $tambahPengaduan->perihal = $request->perihal;
            
            $tambahPengaduan->save();

            return redirect()->back()->withStatus('Berhasil menambahkan data.');

        } catch (Exception $e) {
            return redirect()->back()->withError($e);
        }catch (QueryException $e){
            return redirect()->back()->withError('terjadi kesalahan.');
        }
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
        //
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
        //
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
