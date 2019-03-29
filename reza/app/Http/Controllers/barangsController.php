<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class barangsController extends Controller
{
    public function index()
    {
    	$barangs = 'Aqua 400ML';
    	return view ('produk/index',compact('barangs'));
    }
    public function show()
    {
    	$produk = ['Aqua 115ML', 'Minuman Bersoda','Buku Sejarah','Mouse','CPU'];
    	return view ('produk/show',compact('produk'));
    }
}
