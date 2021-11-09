<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Service;
use App\Models\Pemesanan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

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
        if (Auth:: user()->role == 'adm') {
            $pemesanan = Pemesanan::with('service', 'user')->get();
            return view('pemesanan.index', ['pemesanan' => $pemesanan]);
        } else if (Auth::user()->role == 'usr') {
            $pemesanan = pemesanan::with('service', 'user')->where('user_id',Auth::user()->id)->get();
            return view('pemesanan.form', ['pemesanan' => $pemesanan, 'service' => $service, 'user' => $users]);
        }
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
        $request->validate([
            'hewan' => 'required',
            'booking' => 'required',

        ]);


        $pemesanan = new Pemesanan();
        $pemesanan->code = 'BK-' . sha1(time());
        $pemesanan->hewan = Request('hewan');
        $pemesanan->booking = $request->get('booking');

        $take = Service::all()->where('id', Request('service'))->first();

        // $service = new Service();
        // $service->id = $request->get('service');

        // $pemesanan->service()->associate($service);

        $pemesanan->service_id = $take->id;
        $pemesanan->user_id = Auth::user()->id;


        $pemesanan->save();
        return "joss";
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
