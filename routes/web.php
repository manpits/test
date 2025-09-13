<?php

use App\Http\Controllers\KontakController;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $articles = [
        [
            "judul"     => "Pemrograman Berbasis Web",
            "author"    => "Nyoman Piarsa | 1 Oktober 2024",
            "isi"       => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque eligendi accusantium libero incidunt corporis, maiores id ipsa. Pariatur ex commodi deserunt, dolor similique in esse doloribus? Delectus eligendi praesentium dicta!",
            "email"     => "manpits@gmail.com",
            "name"      => "Nyoman Piarsa",
            "gender"    => "Pria",
            "birth"     => "1 Oktober 2000",
            "jabatan"   => "Dosen",
        ],
        [
            "judul"     => "Koster maju lagi dalam Pilkada Bali 2024",
            "author"    => "Wayan Koster | 20 Oktober 2024",
            "isi"       => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque eligendi accusantium libero incidunt corporis, maiores id ipsa. Pariatur ex commodi deserunt, dolor similique in esse doloribus? Delectus eligendi praesentium dicta!",
            "email"     => "manpits@gmail.com",
            "name"      => "I Wayan Koster",
            "gender"    => "Pria",
            "birth"     => "28 Maret 1960",
            "jabatan"   => "Mantan Gubernur Bali",
        ],
        [
            "judul"     => "Giri Prasta janjikan 1M per KK setiap Galungan",
            "author"    => "Nyoman Giri Prasta | 21 Oktober 2024",
            "isi"       => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque eligendi accusantium libero incidunt corporis, maiores id ipsa. Pariatur ex commodi deserunt, dolor similique in esse doloribus? Delectus eligendi praesentium dicta!",
            "email"     => "manpits@gmail.com",
            "name"      => "Nyoman Giri Prasta",
            "gender"    => "Pria",
            "birth"     => "12 Juli 1973",
            "jabatan"   => "Mantan Bupate Badung",
        ],
        [
            "judul"     => "De Gajah yakin menang jadi Gubernur Bali",
            "author"    => "De Gajah | 28 Oktober 2024",
            "isi"       => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque eligendi accusantium libero incidunt corporis, maiores id ipsa. Pariatur ex commodi deserunt, dolor similique in esse doloribus? Delectus eligendi praesentium dicta!",
            "email"     => "manpits@gmail.com",
            "name"      => "I Made Muliarta",
            "gender"    => "Pria",
            "birth"     => "9 April 1976",
            "jabatan"   => "Ketua DPD Partai Gerindra",
        ],
    ];
    return view('home', compact('articles'));
});

Route::get('/welcome', function () {
    $contacts = [
        [
            "email"     => "manpits@gmail.com",
            "name"      => "Nyoman Piarsa",
            "gender"    => "Pria",
            "birth"     => "1 Oktober 2000",
            "jabatan"   => "Dosen",
        ],
        [
            "email"     => "manpits@gmail.com",
            "name"      => "I Wayan Koster",
            "gender"    => "Pria",
            "birth"     => "28 Maret 1960",
            "jabatan"   => "Mantan Gubernur Bali",
        ],
        [
            "email"     => "manpits@gmail.com",
            "name"      => "Nyoman Giri Prasta",
            "gender"    => "Pria",
            "birth"     => "12 Juli 1973",
            "jabatan"   => "Mantan Bupate Badung",
        ],
        [
            "email"     => "manpits@gmail.com",
            "name"      => "I Made Muliarta",
            "gender"    => "Pria",
            "birth"     => "9 April 1976",
            "jabatan"   => "Ketua DPD Partai Gerindra",
        ],
    ];
    return view('welcome', compact('contacts'));
});

Route::get('/contact', function () {
    $response = Http::get('https://jsonplaceholder.typicode.com/users');
    $kontaks = $response->json();
    return view('kontak', compact('kontaks'));
});

Route::get('/about', function () {
    return view('about')
        ->with('firstname', 'Piarsa')
        ->with('lastname', 'I Nyoman')
        ->with('phone', '08117248714')
        ->with('company', 'Universitas Udayana')
        ->with('email', 'manpits@gmail.com');
});

Route::resource('kontak', KontakController::class);
