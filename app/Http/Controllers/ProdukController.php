<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;

class ProdukController extends Controller
{
    public function show() {
        $data = Produk::get();
        foreach ($data as $produk) {
            $nama[] = $produk->nama;
            $desc[] = $produk->deskripsi;
            $harga[] = $produk->harga;
        }
        return view('produk', compact('nama', 'desc', 'harga'));
    }
}
