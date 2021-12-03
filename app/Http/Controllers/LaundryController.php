<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jenis;
use App\Models\Transaksi;
use App\Models\Petugas;
use App\Models\User;

class LaundryController extends Controller
{
    public function index(Request $request)
    {
        $jeniss = Jenis::all();
        if($request->has('cari')){
            $data_laundry = \App\Models\Transaksi::where('nama','LIKE','%'.$request->cari.'%')->get();
        }else{
            $data_laundry = \App\Models\Transaksi::all();
        }
        
        //$data_laundry = \App\Models\Transaksi::all();
        return view ('laundry.index',['data_laundry' => $data_laundry, "jeniss" => $jeniss]);
    }

    public function create(Request $request)
    {
        \App\Models\Transaksi::create($request->all());
        return redirect ('/laundry')->with('sukses','Data berhasil di input');
    }

    //public function edit($id)
    //{
    //    $jeniss = Jenis::all();
    //    $laundry = \App\Models\Transaksi::find($id);
    //    return view('laundry.edit',['laundry' => $laundry, "jeniss" => $jeniss]);
    //}

    public function edit($id)
    {
        $jenis = Jenis::all();
        $transaksis = Transaksi::all();
        $laundry = \App\Models\Transaksi::find($id);
        //return view('laundry.edit',['laundry' => $laundry, "jenis" => $jenis, "transaksis" => $transaksis]);
        return view ('laundry/edit',compact('transaksis','laundry','jenis'));
    }

    public function update(Request $request, $id)
    {
        $laundry = \App\Models\Transaksi::find($id);
        $laundry->update($request->all());
        return redirect('/laundry')->with('sukses','Data berhasil di update');
    }

    public function delete($id)
    {
        $laundry = \App\Models\Transaksi::find($id);
        $laundry->delete($laundry);
        return redirect('/laundry')->with('sukses','Data berhasil di hapus');
    }
}
