<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Row;
use App\Hall;
use App\Seat;

class SeatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $seats = Seat::all();
        return view('backend.seats.index',compact('seats'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        //
        $rows=Row::all();
        $halls=Hall::all();
        //dd($halls);
        //dd($rows);
        $seats=Seat::all();
        return view('backend.seats.create',compact('rows','halls','seats'));
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
            'seatno' => 'required',
            'hall_id' => 'required',
            'row_id' => 'required'
        ]);

        $seat = new Seat();

        $seat->seatno=$request->seatno;
        $seat->hall_id=$request->hall_id;
        $seat->row_id=$request->row_id;

        $seat->save();

        return redirect()->route('seats.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $seat = Seat::find($id);
        $row = Row::find($seat->row_id);
        $hall = Hall::find($seat->hall_id);
        return view('backend.seats.show',compact('seat','row','hall'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $rows = Row::all();
        $halls = Hall::all();
        $seat = Seat::find($id);
        //dd($rows);
        //dd($seat);
        //dd($halls);
        return view('backend.seats.edit',compact('seat','rows','halls'));
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
        $validator=$request -> validate([
        
        'seatno' =>'required',
        'hall' =>'required',
        'row' =>'required'
        ]);

        //Update Data
        $seat=Seat::find($id);
        // dd($request);
        $seat->seatno=$request->seatno;

        $seat->hall_id=$request->hall;

        $seat->row_id=$request->row;
        
        $seat->save();

        return redirect()->route('seats.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $seat=Seat::find($id);
       //delete related  file from storage
       $seat->delete();
       return redirect()->route('seats.index');
    }
}
