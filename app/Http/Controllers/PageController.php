<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\User;

class PageController extends Controller
{
    public function index()
    {
        $nama_halaman = 'Home Page';
        return view('index', ['nama_halaman' => $nama_halaman]);
    }
    public function features()
    {
        $nama_halaman = 'Features Page';
        return view('features', ['nama_halaman' => $nama_halaman]);
    }
    public function pricing()
    {
        $nama_halaman = 'Princing Page';
        return view('pricing', ['nama_halaman' => $nama_halaman]);
    }

    public function students()
    {
        $nama_halaman = 'Student Page';
        return view('students.create', ['nama_halaman' => $nama_halaman]);
    }

    
    //Route::get('/students/{student}', 'StudentController@show');
    //public function mahasiswa()
    //{
    //    $nama_halaman = 'Data Mahasiswa';
    //    return view('mahasiswa.index', ['nama_halaman' => $nama_halaman]);
    //}
}