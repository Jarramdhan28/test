<?php

namespace App\Http\Controllers;

use App\Buku;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $buku = Buku::all();
        return view('welcome', ['buku' => $buku]);
    }
}
