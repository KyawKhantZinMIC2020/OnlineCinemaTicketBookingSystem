<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Hall;
use Validator;

class HallController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hall = Hall::all();
        return view('backend.halls.index',compact('hall'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $hall = Hall::all();
        return view('backend.halls.create',compact('hall'));
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
            'name' => 'required|string',
            'address' => 'required|string',
            'quantity' => 'required|numeric',
            'price' =>  'required'
        ]);

        $hall = new Hall();

        $hall->name=$request->name;
        $hall->address=$request->address;
        $hall->quantity=$request->quantity;
        $hall->price=$request->price;

        $hall->save();

        return redirect()->route('halls.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $hall = Hall::find($id);
        return view('backend.halls.show',compact('hall'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $hall = Hall::find($id);
        //dd($hall);
        return view('backend.halls.edit',compact('hall'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Hall $hall)
    {   
       // dd($request);
        $request -> validate([
        
        'name' =>'required',
        'address' =>'required',
        'quantity' =>'required',
        'price' => 'required'
        ]);

        $hall->name=$request->name;
        $hall->address=$request->address;
        $hall->quantity=$request->quantity;
        $hall->price=$request->price;

        $hall->save();

        return redirect()->route('halls.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $hall = Hall::find($id);
        $hall->delete();

        return redirect()->route('halls.index');
    }
}
