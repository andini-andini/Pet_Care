<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class doctorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $doctor = Doctor::all(); // Mengambil semua isi tabel
        $posts = Doctor::orderBy('id', 'desc')->paginate(5);
        return view('doctor.index', compact('doctor'), ['data' => $doctor]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('doctor.create');
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
            'sip' => 'required',
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'image' => 'required',
            // 'featured_image' => 'required',

        ]);
        if ($request->file('image')) {
            $image_name = $request->file('image')->store('images', 'public');
        }
        $doctor = new Doctor();
        $doctor->sip = $request->get('sip');
        $doctor->name = $request->get('name');
        $doctor->email = $request->get('email');
        $doctor->phone = $request->get('phone');
        $doctor->address = $request->get('address');
        $doctor->image = $image_name;
        $doctor->save();
        //jika data berhasil ditambahkan, akan kembali ke halaman utama
        return redirect()->route('doctor.index')->with('success', 'design Berhasil Ditambahkan');
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
        $doctor = Doctor::find($id);
        return view('doctor.edit', compact('doctor'));
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
            'sip' => 'required',
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'address' => 'required',
        ]);
        $doctor = Doctor::find($id);
        if ($request->file('image') != null && $doctor->image && file_exists(storage_path('app/public/' . $doctor->image))) {
            Storage::delete(['public/' . $doctor->image]);
            $image_name = $request->file('image')->store('images', 'public');
        } elseif ($request->file('image') != null) {
            $image_name = $request->file('image')->store('images', 'public');
        } else {
            $image_name = $doctor->image;
        }
        $doctor->sip = $request->get('sip');
        $doctor->name = $request->get('name');
        $doctor->email = $request->get('email');
        $doctor->phone = $request->get('phone');
        $doctor->address = $request->get('address');
        $doctor->image = $image_name;
        $doctor->save();
        //jika data berhasil ditambahkan, akan kembali ke halaman utama
        return redirect()->route('doctor.index')->with('success', 'design Berhasil Diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Doctor::find($id)->delete();
        return redirect()->route('doctor.index')->with('success', 'Data Berhasil Dihapus');
    }
}
