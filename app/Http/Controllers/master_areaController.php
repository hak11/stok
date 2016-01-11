<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\master_area;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;

class master_areaController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $master_area = master_area::paginate(15);

        return view('master_area.index', compact('master_area'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('master_area.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $this->validate($request, ['nama_area' => 'required', 'pj' => 'required', 'keterangan' => 'required', ]);

        master_area::create($request->all());

        Session::flash('message', 'Data Added!!'); 
        Session::flash('alert-class', 'alert-success alert-dismissable');

        return redirect('master_area/create');
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
        $master_area = master_area::findOrFail($id);

        return view('master_area.show', compact('master_area'));
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
        $master_area = master_area::findOrFail($id);

        return view('master_area.edit', compact('master_area'));
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
        $this->validate($request, ['nama_area' => 'required', 'pj' => 'required', 'keterangan' => 'required', ]);

        $master_area = master_area::findOrFail($id);
        $master_area->update($request->all());


        Session::flash('message_update', 'Data Updated'); 
        Session::flash('alert-class', 'alert-warning alert-dismissable');

        return redirect('master_area');
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
        master_area::destroy($id);

        Session::flash('message_destroy', 'Data Deleted'); 
        Session::flash('alert-class', 'alert-danger alert-dismissable');

        return redirect('master_area');
    }

}
