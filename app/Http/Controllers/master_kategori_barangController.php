<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\master_kategori_barang;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;

class master_kategori_barangController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $master_kategori_barang = master_kategori_barang::paginate(15);

        return view('master_kategori_barang.index', compact('master_kategori_barang'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('master_kategori_barang.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $this->validate($request, ['nama_kategori' => 'required', 'keterangan' => 'required', ]);

        master_kategori_barang::create($request->all());

        Session::flash('message', 'master_kategori_barang Added!!'); 
        Session::flash('alert-class', 'alert-success alert-dismissable');

        return redirect('master_kategori_barang/create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return Response
     */
    public function show($id)
    {
        $master_kategori_barang = master_kategori_barang::findOrFail($id);

        return view('master_kategori_barang.show', compact('master_kategori_barang'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $master_kategori_barang = master_kategori_barang::findOrFail($id);

        return view('master_kategori_barang.edit', compact('master_kategori_barang'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     *
     * @return Response
     */
    public function update($id, Request $request)
    {
        $this->validate($request, ['nama_kategori' => 'required', 'keterangan' => 'required', ]);

        $master_kategori_barang = master_kategori_barang::findOrFail($id);
        $master_kategori_barang->update($request->all());


        Session::flash('message_update', 'Data Updated'); 
        Session::flash('alert-class', 'alert-warning alert-dismissable');

        return redirect('master_kategori_barang');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        master_kategori_barang::destroy($id);

        Session::flash('message_destroy', 'Data Deleted'); 
        Session::flash('alert-class', 'alert-danger alert-dismissable');

        return redirect('master_kategori_barang');
    }

}
