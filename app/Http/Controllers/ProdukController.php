<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Produk;
use Auth;
use Carbon\Carbon;

class ProdukController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index($id)
    {
        $produk = Produk::where('id',$id)->first();
        return view('pesan.index' ,compact('produk'));
    }

    public function pesan(Request $request){
        $produk = Produk::where('id',$id)->first();
        $tanggal = Carbon::now();

        //simpan ke database produk
        $produk = new Produk;
        $produk -> id_produk = $produk->id;
        $pesanan -> nama_produk = $tanggal;
        $pesanan -> harga_satuan = $produk->harga*$request->jumlah_pesan; 
        $pesanan -> save();

        //simpan ke database detail_transaksi
        $pesanan_baru = Pesanan::where('user_id',Auth::user()->where('status',0)->first);

        $detail_transaksi = new detail_transaksi;
        $detail_transaksi->id_produk = $produk->id;
        $detail_transaksi->pesanan_id = $pesanan_baru->id;
        $detail_transaksi->jumlah = $request ->jumlah_pesan;
        $detail_transaksi->jumlah_harga= $produk->harga*$request->jumlah_pesan;
        $detail_transaksi->save();

        $pesanan_baru->jumlah_harga = $produk->harga*$request->jumlah_pesan;

        return redirect('home');
    }
}