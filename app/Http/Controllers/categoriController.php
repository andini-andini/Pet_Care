<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Barang;
use App\Models\Categori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class categoriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::all()->sortBy("asc");
        $barang = Barang::all()->sortBy("asc");
        $categori = Categori::all()->sortBy("asc");

        $posts = Categori::orderBy('id', 'desc');

        if (Auth::user()->role == 'usr') {
            return view('barang.shop', ['categori' => $categori], compact('barang', 'categori'));
        } else if (Auth::user()->role == 'adm') {
            return view('categori.index', ['categori' => $categori], compact('barang', 'categori'));
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('categori.create');
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
            'name' => 'required',

        ]);
        $categori = new Categori();
        $categori->name = $request->get('name');
        $categori->save();
        //jika data berhasil ditambahkan, akan kembali ke halaman utama
        return redirect()->route('categori.index')->with('success', 'Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $categori = Categori::all()->sortBy("asc");
        $barang = Barang::all()->where('categori_id', $id);
        return view('barang.shop', ['categori' => $categori], ['barang' => $barang]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categori = Categori::find($id);
        return view('categori.edit', compact('categori'));
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
        $request->validate([
            'name' => 'required',
        ]);
        $categori = Categori::find($id);

        $categori->name = $request->get('name');
        $categori->save();
        //jika data berhasil ditambahkan, akan kembali ke halaman utama
        return redirect()->route('categori.index')->with('success', 'Data Berhasil Diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Categori::find($id)->delete();
        return redirect()->route('categori.index')->with('success', 'Data Berhasil Dihapus');
    }
}
