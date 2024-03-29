<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use SweetAlert;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $carts = Cart::with(['barang', 'pembelians'])->where('user_id', Auth::user()->id)->get();
        $data = [];
        foreach ($carts as $c) {
            if (!$c->pembelians()->exists()) {
                $data[] = $c;
            }
        }
        // if ($carts) {
        //     $data = [];
        //     if ($carts[0]->pembelians()->exists()) {
        //         $data = [];
        //     } else {
        //         $data = $carts;
        //     }
        //     return response()->json($carts[0]->pembelians()->exists());
        // } else {
        //     $data = [];
        // }

        $total = 0;
        foreach ($data as $key => $value) {
            $total += $value->qty * $value->barang->price;
        }
        return view('pembelian.cart', ['cart' => $data, 'total' => $total]);
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
        $barang = Barang::find($request->barang_id);
        if ($barang->stok > $request->qty) {
            Cart::create([
                'qty' => $request->qty,
                'barang_id' => $request->barang_id,
                'user_id' => Auth::user()->id,
                'total' => $barang->price * $request->qty,
            ]);
            return redirect()->route('cart.index');
        } else {
            // return redirect()->route('barang.index')->with('success', 'Data Berhasil Dihapus');
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
        Cart::find($id)->delete();
        return redirect()->route('cart.index')->with('success', 'Data Berhasil Dihapus');
    }
}
