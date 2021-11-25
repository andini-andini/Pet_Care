<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\User;
use App\Models\Categori;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class barangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $barang = Barang::all(); // Mengambil semua isi tabel
        // $posts = Barang::orderBy('id', 'desc')->paginate(5);
        // return view('barang.index', compact('barang'), ['data' => $barang]);
        $user = User::all()->sortBy("asc");
        $barang = Barang::all()->sortBy("asc");
        $categori = Categori::all()->sortBy("asc");
        if (Auth::user()->role == 'usr') {
            // $barang = Barang::with('categori', 'user')->get();
            return view('barang.shop', ['categori' => $categori], compact('barang', 'categori'));
        } else if (Auth::user()->role == 'adm') {
            return view('barang.index', ['categori' => $categori], compact('barang', 'categori'));
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categori = Categori::all()->sortBy("asc");
        $barang = Barang::with('categori');
        return view('barang.create', ['barang' => $barang, 'categori' => $categori]);
        // return view('barang.create');
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
            'price' => 'required',
            'image' => 'required',
            // 'featured_image' => 'required',

        ]);
        if ($request->file('image')) {
            $image_name = $request->file('image')->store('images', 'public');
        }
        $barang = new Barang();
        $barang->name = $request->get('name');
        $barang->price = $request->get('price');
        $barang->image = $image_name;

        $take = Categori::all()->where('id', Request('categori'))->first();

        $barang->categori_id = $take->id;

        $barang->save();
        //jika data berhasil ditambahkan, akan kembali ke halaman utama
        return redirect()->route('barang.index')->with('success', 'design Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('barang.detail');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $barang = Barang::find($id);
        return view('barang.edit', compact('barang'));

        // $categori = Categori::all()->sortBy("asc");
        // $barang = Barang::find($id)->with('categori');
        // return view('barang.edit', compact('barang'), ['barang' => $barang, 'categori' => $categori]);
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
            'price' => 'required',
        ]);
        $barang = Barang::find($id);
        if ($request->file('image') != null && $barang->image && file_exists(storage_path('app/public/' . $barang->image))) {
            Storage::delete(['public/' . $barang->image]);
            $image_name = $request->file('image')->store('images', 'public');
        } elseif ($request->file('image') != null) {
            $image_name = $request->file('image')->store('images', 'public');
        } else {
            $image_name = $barang->image;
        }
        $barang->name = $request->get('name');
        $barang->price = $request->get('price');
        $barang->image = $image_name;
        $barang->save();
        //jika data berhasil ditambahkan, akan kembali ke halaman utama
        return redirect()->route('barang.index')->with('success', 'design Berhasil Diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Barang::find($id)->delete();
        return redirect()->route('barang.index')->with('success', 'Data Berhasil Dihapus');
    }

    public function barang_categori(Categori $categori)
    {
        $barang = $categori->Barang()->get();
        return $barang;
    }
}
