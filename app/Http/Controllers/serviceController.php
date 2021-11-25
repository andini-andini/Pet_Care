<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use Illuminate\Support\Facades\Storage;


class serviceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $service = Service::all(); // Mengambil semua isi tabel
        $posts = Service::orderBy('id', 'desc')->paginate(5);
        return view('service.index', compact('service'), ['data' => $service]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('service.create');
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
        $service = new Service();
        $service->name = $request->get('name');
        $service->price = $request->get('price');
        $service->image = $image_name;
        $service->save();
        //jika data berhasil ditambahkan, akan kembali ke halaman utama
        return redirect()->route('service.index')->with('success', 'Data Berhasil Ditambahkan');
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
        $service = Service::find($id);
        return view('service.edit', compact('service'));
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
        $service = Service::find($id);
        if ($request->file('image') != null && $service->image && file_exists(storage_path('app/public/' . $service->image))) {
            Storage::delete(['public/' . $service->image]);
            $image_name = $request->file('image')->store('images', 'public');
        } elseif ($request->file('image') != null) {
            $image_name = $request->file('image')->store('images', 'public');
        } else {
            $image_name = $service->image;
        }
        $service->name = $request->get('name');
        $service->price = $request->get('price');
        $service->image = $image_name;
        $service->save();
        //jika data berhasil ditambahkan, akan kembali ke halaman utama
        return redirect()->route('service.index')->with('success', 'Data Berhasil Diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Service::find($id)->delete();
        return redirect()->route('service.index')->with('success', 'Data Berhasil Dihapus');
    }
}
