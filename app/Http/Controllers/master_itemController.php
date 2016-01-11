<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\master_item;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;

class master_itemController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $master_item = master_item::all();

        return view('master_item.index', compact('master_item'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('master_item.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $this->validate($request, ['nama_barang' => 'required', 'kategori' => 'required', 'harga' => 'required', ]);

        master_item::create($request->all());


        Session::flash('message', 'Data added'); 
        Session::flash('alert-class', 'alert-success alert-dismissable');

        return redirect('master_item/create');
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
        $master_item = master_item::findOrFail($id);

        return view('master_item.show', compact('master_item'));
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
        $master_item = master_item::findOrFail($id);

        return view('master_item.edit', compact('master_item'));
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
        $this->validate($request, ['nama_barang' => 'required', 'kategori' => 'required', 'harga' => 'required', ]);

        $master_item = master_item::findOrFail($id);
        $master_item->update($request->all());

        Session::flash('message_update', 'Data Updated'); 
        Session::flash('alert-class', 'alert-warning alert-dismissable');

        return redirect('master_item');
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
        master_item::destroy($id);

        Session::flash('message_destroy', 'Data Deleted'); 
        Session::flash('alert-class', 'alert-danger alert-dismissable');

        return redirect('master_item');
    }

}
