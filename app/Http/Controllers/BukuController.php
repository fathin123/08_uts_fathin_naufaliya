<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Buku;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $bukus = Buku::paginate(5);
        return view('buku.index', compact('bukus'));
        with('i', (request()->input('page', 1) - 1) * 5);
    }
    
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('buku.create');
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
        //melakukan validasi data
        $request->validate([
            'id_buku' => 'required',
            'judul' => 'required',
            'kategori' => 'required',
            'penerbit' => 'required',
            'pengarang' => 'required',
            'jumlah' => 'required',
            'status' => 'required',    
        ]);

        //fungsi eloquent untuk menambah data
        Buku::create($request->all());

        //jika data berhasil ditambahkan , akan kembali ke halaman utama
        return redirect()->route('buku.index')
        ->with('successs', 'Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id_buku)
    {
        //
        //menampilkan detail data dengan menemukan/berdasarkan Nim Mahasiswa
        $Buku = Buku::find($id_buku);
        return view('buku.detail', compact('Buku'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id_buku)
    {
        //
         //menampilkan detail data dengan menemukan berdasarkan Nim Mahasiswa untuk diedit
         $Buku = Buku::find($id_buku);
         return view('buku.edit', compact('Buku'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_buku)
    {
        //
        $request->validate([
            'id_buku' => 'required',
            'judul' => 'required',
            'kategori' => 'required',
            'penerbit' => 'required',
            'pengarang' => 'required',
            'jumlah' => 'required',
            'status' => 'required',    
        ]);
        //fungsi eloquent untuk mengupdate data inputan kita
        Buku::find($id_buku)->update($request->all());

        //jika data berhasil diupdate, akan kembali ke halaman utama   
        return redirect()->route('buku.index')
            ->with('success', 'Data Berhasil Diupdate');
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
        Buku::find($id_buku)->delete();
        return redirect()->route('buku.index')
            -> with('success', 'Data Berhasil Dihapus');
    }
}
