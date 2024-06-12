<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;

class ListProdukController extends Controller
{
    public function show() 
    {
        $data = Produk::all();
        $nama = [];
        $desc = [];
        $harga = [];
        $id = [];

        foreach ($data as $produk) {
            $id[] = $produk->id;
            $nama[] = $produk->nama;
            $desc[] = $produk->deskripsi;
            $harga[] = $produk->harga;
        }
        return view('list_produk', compact('id', 'nama', 'desc', 'harga'));
    }

    public function simpan(Request $request)
    {
        $produk = new Produk;
        $produk->nama = $request->input('nama');
        $produk->deskripsi = $request->input('deskripsi');
        $produk->harga = $request->input('harga');
        $produk->save();

        return redirect()->back()->with('success', 'Data berhasil disimpan!');
    }

    public function delete($id)
    {
        $produk = Produk::where('id', $id)->first();
        if ($produk) {
            $produk->delete();
            return redirect()->back()->with('success', 'Produk berhasil dihapus');
        } else {
            return redirect()->back()->with('error', 'Produk tidak ditemukan');
        }
    }
}
