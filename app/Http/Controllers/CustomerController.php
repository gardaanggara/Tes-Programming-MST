<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\m_customer;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ListPembeli = m_customer::all();
        return view('managecustomer', ['ListPembeli' => $ListPembeli]);
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
    public function store(Request $request)
    {
        $cust = new m_customer;
        $cust->kode = $request->kode;
        $cust->name = $request->name;
        $cust->telp = $request->telp;
        $cust->save();
        // dd($barang->save);
        // $valdiate = $request->validate([
        // 'kategori' => 'numeric',
        // ]);
        return redirect()->back();
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
        $cust = m_customer::findOrFail($id);
        return view('managecustomer-edit', ['cust' => $cust]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $barang = m_customer::findOrFail($id);
        $barang->kode = $request->kode;
        $barang->name = $request->name;
        $barang->telp = $request->telp;
        $barang->update();
        // dd($barang->update);
        // $valdiate = $request->validate([
        // 'kategori' => 'numeric',
        // ]);
        return redirect(route('customer.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cust = m_customer::find($id);
        $cust->delete();
        return redirect()->back();
    }
}
