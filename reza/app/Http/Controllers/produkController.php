<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class produkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produk = DB::table('barangs')->get()->join('kategori','produks.id_kategori','=','kategori.id')->get();  

        return view('produk/index',compact('produk')); 
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
    public function store()
    {
        DB::table('barangs') 
        ->insert([ 
            'nama' => 'Lampu', 
            'id_kategori' => 1, 
            'qty' => 14, 
            'harga_beli' => 40000,
            'harga_jual' => 60000, 
            ]);
        echo "Data Berhasil Ditambah";
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
    public function update()
    {
        DB::table('barangs')->where('id',3) 
        ->update([ 'nama' => 'Bola Lampu', 
            'qty' => 20, 
            'harga_beli' => 45000, 
            'harga_jual' => 55000, ]);  

echo "Data Berhasil Diperbaharui"; 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    
    public function delete()
{ 
    DB::table('barangs')->where('id',3)->delete(); 
    echo "Data Berhasil Dihapus"; 
}

}
