<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Row;

class RowController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $row = Row::all();
        return view('backend.rows.index',compact('row'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $row = Row::all();
        return view('backend.rows.create',compact('row'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
        'price'=>'required|string',
        'row' => 'required|string'
        
        ]);

        $row = new Row();

        $row->price=$request->price;
        $row->row=$request->row;

        $row->save();

        return redirect()->route('rows.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $row = Row::find($id);
        return view('backend.rows.show',compact('row'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $row = Row::find($id);
        return view('backend.rows.edit',compact('row'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Row $row)
    {
        $request -> validate([
        
        'price' =>'required',
        'row' =>'required'
        ]);

        $row->price=$request->price;
        $row->row=$request->row;

        $row->save();

        return redirect()->route('rows.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $row = Row::find($id);
        $row->delete();

        return redirect()->route('rows.index');
    }
}
