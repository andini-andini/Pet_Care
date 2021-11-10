<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Service;
use App\Models\Pemesanan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;

class pemesananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all()->sortBy("asc");
        $service = Service::all()->sortBy("asc");
        if (Auth::user()->role == 'adm') {
            $pemesanan = Pemesanan::with('service', 'user')->get();
            return view('pemesanan.index', ['pemesanan' => $pemesanan]);
        } else if (Auth::user()->role == 'usr') {
            $pemesanan = pemesanan::with('service', 'user')->where('user_id', Auth::user()->id)->get();
            return view('pemesanan.index_usr', ['pemesanan' => $pemesanan, 'service' => $service, 'user' => $users]);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::all()->sortBy("asc");
        $service = Service::all()->sortBy("asc");
        $pemesanan = pemesanan::with('service', 'user')->where('user_id', Auth::user()->id)->get();
        return view('pemesanan.form', ['pemesanan' => $pemesanan, 'service' => $service, 'user' => $users]);
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
            'hewan' => 'required',
            'booking' => 'required',

        ]);

        $pemesanan = new Pemesanan();
        $pemesanan->code = 'BK-' . random_int(0, 10000);
        $pemesanan->hewan = Request('hewan');
        $pemesanan->booking = $request->get('booking');

        $take = Service::all()->where('id', Request('service'))->first();

        // $service = new Service();
        // $service->id = $request->get('service');

        // $pemesanan->service()->associate($service);

        $pemesanan->service_id = $take->id;
        $pemesanan->user_id = Auth::user()->id;


        $pemesanan->save();
        return redirect()->route('home')->with('success', 'Data Berhasil Ditambahkan');
        // return "joss";
        //jika data berhasil ditambahkan, akan kembali ke halaman utama
        // return redirect()->route('/home')->with('success', 'design Berhasil Ditambahkan');
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
        $users = User::all()->sortBy("asc");
        $service = Service::all()->sortBy("asc");
        if (Auth::user()->role == 'adm') {
            $pemesanan = Pemesanan::with('service', 'user')->get();
            return view('pemesanan.edit', ['pemesanan' => $pemesanan]);
        } else if (Auth::user()->role == 'usr') {
            $pemesanan = pemesanan::with('service', 'user')->where('user_id', Auth::user()->id)->get();
            return view('pemesanan.edit_form', ['pemesanan' => $pemesanan, 'service' => $service, 'user' => $users]);
        }
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
            'status' => 'required',
        ]);
        // $pemesanan = Pemesanan::find($id);

        // $pemesanan->hewan = $request->get('hewan');
        // $pemesanan->booking = $request->get('booking');
        // $take = Service::all()->where('id', Request('service'))->first();

        // $pemesanan->service_id = $take->id;
        // $pemesanan->save();
        // //jika data berhasil ditambahkan, akan kembali ke halaman utama
        // return view('home_usr')->with('success', 'Data Berhasil Diperbarui');

        $pemesanan = Pemesanan::find($id);

        $pemesanan->status = $request->status;
        $pemesanan->save();
        //jika data berhasil ditambahkan, akan kembali ke halaman utama
        return redirect()->route('pemesanan.index')->with('success', 'data Berhasil Diperbarui');
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

    public function status(Request $request, $id)
    {
        // $del = Pemesanan::all()->where('id', Request('id'))->first();
        // $del->delete();
        // return Request('id');
        // $request->validate([
        //     'name' => 'required',
        //     'price' => 'required',
        // ]);
        $pemesanan = Pemesanan::find($id);

        $pemesanan->status = $request->status == "on" ? true : false;
        $pemesanan->save();
        //jika data berhasil ditambahkan, akan kembali ke halaman utama
        return redirect()->route('pemesanan.index')->with('success', 'data Berhasil Diperbarui');
    }

    public function showuploadBuktiPembayaran($id)
    {
        $data = Pemesanan::find($id);
        return view('pemesanan.upload', compact('data'));
    }

    public function uploadBuktiPembayaran(Request $request, $id)
    {
        $data = Pemesanan::find($id);
        if ($request->file('bukti') != null && file_exists(storage_path('app/public/' . $data->upload_bukti))) {
            Storage::delete(['public/' . $data->upload_bukti]);
            $image_name = $request->file('bukti')->store('bukti', 'public');
        } elseif ($request->file('bukti') != null) {
            $image_name = $request->file('bukti')->store('bukti', 'public');
        } else {
            $image_name = $data->upload_bukti;
        }

        $data->update([
            'upload_bukti' => $image_name
        ]);

        return redirect()->route('pemesanan.index');
    }
}
