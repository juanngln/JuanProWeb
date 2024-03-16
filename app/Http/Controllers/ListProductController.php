<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListProductController extends Controller
{
    public function getData () {
        $dataProduk = [
            ['id' => 1, 'produk' => 'Paddle Pop Rainbow'],
            ['id' => 2, 'produk' => 'Sari Roti Sandwich'],
            ['id' => 3, 'produk' => 'Garuda Rosta'],
            ['id' => 4, 'produk' => 'Fruit Tea'],
            ['id' => 5, 'produk' => 'Golda'],
            ['id' => 6, 'produk' => 'Red Bull']
        ];

        return $dataProduk;
    }

    public function tampilkan() {
        $data = $this->getData();
        return view('list_product', compact('data'));
    }
}