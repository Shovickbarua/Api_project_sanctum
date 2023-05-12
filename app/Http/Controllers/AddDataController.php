<?php

namespace App\Http\Controllers;

use App\Models\add_data;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
class AddDataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = add_data::all();
        return response($data, 200);
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
        $add_data = new add_data();
        $add_data->name     =$request->name;
        $add_data->contact  =$request->contact;
        $add_data->address  =$request->address;
        $add_data->save(); 

        return ['Result'=>'Data inserted successfully'];
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\add_data  $add_data
     * @return \Illuminate\Http\Response
     */
    public function show(add_data $add_data)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\add_data  $add_data
     * @return \Illuminate\Http\Response
     */
    public function edit(add_data $add_data)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\add_data  $add_data
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $add_data =add_data::find($request->id);
        $add_data->name     =$request->name;
        $add_data->contact  =$request->contact;
        $add_data->address  =$request->address;
        $add_data->save(); 

        return ['Result'=>'Data inserted successfully'];
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\add_data  $add_data
     * @return \Illuminate\Http\Response
     */
    public function destroy(add_data $add_data)
    {
        //
    }
}
