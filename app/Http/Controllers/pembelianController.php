<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use PDF;
use App\Models\Cart;
use App\Models\Pembelian;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class pembelianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::user()->role == 'adm') {
            $data = Pembelian::with('carts.barang')->get();
            return view('pembelian.index', compact('data'));
        } else {
            $data = Pembelian::with(['carts.barang'])->whereHas('carts', function ($q) {
                $q->where('user_id', Auth::user()->id);
            })->get();
            return view('pembelian.index_usr', compact('data'));
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $carts = Cart::with(['barang', 'pembelians'])->where('user_id', Auth::user()->id)->get();
        $data = [];
        $id = [];
        foreach ($carts as $c) {
            if (!$c->pembelians()->exists()) {
                $data[] = $c;
                $id[] = $c->id;
            }
        }
        $total = 0;
        // return response($data);
        foreach ($data as $key => $value) {
            $total += $value->qty * $value->barang->price;
        }

        // $total = Cart::where('user_id', Auth::user()->id)->sum('total');

        $pembelian = Pembelian::create([
            'code' => 'PR-' . random_int(0, 10000),
            'total' => $total
        ]);

        foreach ($carts as $carts) {
            $barang = Barang::where('id', $carts->barang_id)->first();
            $barang->stok = $barang->stok - $carts->qty;
            $barang->update();
        }

        $pembelian->carts()->attach($id);
        return redirect()->route('pembelian.index');
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
        $pembelian = Pembelian::find($id);

        $pembelian->status = $request->status == "on" ? true : false;
        $pembelian->save();
        //jika data berhasil ditambahkan, akan kembali ke halaman utama
        return redirect()->route('pembelian.index')->with('success', 'data Berhasil Diperbarui');
    }

    public function showuploadBuktiPembayaran($id)
    {
        $data = Pembelian::find($id);
        return view('pembelian.upload', compact('data'));
    }

    public function uploadBuktiPembayaran(Request $request, $id)
    {
        $data = Pembelian::find($id);
        if ($request->file('bukti') != null && file_exists(storage_path('app/public/' . $data->upload_bukti))) {
            Storage::delete(['public/' . $data->bukti]);
            $image_name = $request->file('bukti')->store('bukti', 'public');
        } elseif ($request->file('bukti') != null) {
            $image_name = $request->file('bukti')->store('bukti', 'public');
        } else {
            $image_name = $data->bukti;
        }

        $data->update([
            'bukti' => $image_name
        ]);

        return redirect()->route('pembelian.index');
    }

    public function cetakResi($id)
    {
        $data = Pembelian::with(['carts.barang', 'carts.user'])->find($id);

        $pdf = PDF::loadView('pembelian.print', ['pembelian' => $data]);
        return $pdf->stream();
    }
}
