<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\bukuterbit;

class BukuterbitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() 
    {
        $data['bukuterbit'] = bukuterbit::all();
        return view('admin_maple.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin_maple.tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'id_buku' => 'unique:bukuterbit,id_buku'
        ]);

        $gambar = $request->gambar;
        $namaFile = time().rand(100,999).".".$gambar->getClientOriginalExtension();

            $dtGambar = new bukuterbit;

            $gambar->move(public_path().'/upload', $namaFile);

        $data = [
            'id_buku' => $request->id_buku,
            'judul_buku' => $request->judul_buku,
            'penulis' => $request->penulis,
            'jenis_buku' => $request->jenis_buku,
            'tahun_terbit' => $request->tahun_terbit,
            'sinopsis' => $request->sinopsis,
            'gambar' => $dtGambar->gambar = $namaFile,
        ];

        bukuterbit::create($data);

        return redirect()->route('admin.index');
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
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id_buku)
    {
        $data['bukuterbit'] = bukuterbit::findOrFail($id_buku);

        return view('admin_maple.ubah', $data, compact('data'));
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
        $bukuterbit = bukuterbit::findOrfail($id_buku);
        $gambar = $bukuterbit->gambar;

        $request->validate([
            'id_buku' => "unique:bukuterbit,id_buku,$bukuterbit->id_buku"
        ]);

        $data = [
            'id_buku' => $id_buku,
            'judul_buku' => $request->judul_buku,
            'penulis' => $request->penulis,
            'jenis_buku' => $request->jenis_buku,
            'tahun_terbit' => $request->tahun_terbit,
            'sinopsis' => $request->sinopsis,
            'gambar' => $gambar,
        ];

        $request->gambar->move(public_path().'/upload', $gambar);

        $bukuterbit->update($data);

        return redirect()->route('admin.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_buku)
    {
        $bukuterbit = bukuterbit::find($id_buku);

        $bukuterbit->delete();

        return redirect()->route('admin.index');
    }
}
