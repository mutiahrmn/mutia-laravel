<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('product', function () {
    return view('product');
});

Route::get('/product', function () {
    $page_title = 'Product';

    $products = [
        [
            "kode_produk" => "BRG001",
            "nama_produk" => "Pena",
            "jenis_produk" => "Alat Tulis",
            "harga_produk" => 20000
        ],
        [
            "kode_produk" => "BRG002",
            "nama_produk" => "Buku",
            "jenis_produk" => "Alat Tulis",
            "harga_produk" => 15000
        ]
    ];

    return view('product', compact('page_title', 'products'));
});


// Route::get('about', function () {
//     return view('about');
// });

// Route::get('mahasiswa', function () {
//     return view('mahasiswa');
// });

// Route::get('profile', function () {
//     $nama = "Mutia Herman";
//     //return view('profile', compact('nama'));
//     return view('profile')->with('nama', $nama);
// });
