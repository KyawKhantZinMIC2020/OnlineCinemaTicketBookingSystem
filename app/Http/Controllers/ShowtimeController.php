<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;
use App\Hall;
use App\ShowTime;

class ShowtimeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $showtime = ShowTime::all();
        $movies = Movie::all();
        $halls = Hall::all();
        return view('backend.showtimes.index',compact('showtime', 'movies', 'halls'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $movies=Movie::all();
        $halls=Hall::all();
        $showtime=ShowTime::all();
        
        return view('backend.showtimes.create',compact('showtime','movies','halls'));
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
            'showtime' => 'required',
            'date' => 'required',
            'movie' => 'required',
            'hall' => 'required'
        ]);
        $showtime = new ShowTime();
        $showtime->showtime=$request->showtime;
        $showtime->date=$request->date;
        $showtime->movie_id=$request->movie;
        $showtime->hall_id=$request->hall;

        $showtime->save();

        return redirect()->route('showtimes.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $show = ShowTime::find($id);
        $movie = Movie::find($show->movie_id);
        $hall = Hall::find($show->hall_id);
        return view('backend.showtimes.show',compact('show','movie','hall'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $movies = Movie::all();
        $halls = Hall::all();
        $showtime = ShowTime::find($id);
        //dd($movies);

        return view('backend.showtimes.edit',compact('movies','showtime','halls'));
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
        
        'showtime' =>'required',
        'date' =>'required',
        'movie' =>'required', //get from create.blade
        'hall' =>'required'
        ]);

        //Update Data
        $show=ShowTime::find($id);
        // dd($request);
        $show->showtime=$request->showtime;

        $show->date=$request->date;

        $show->movie_id=$request->movie;

        $show->hall_id=$request->hall;
        
        $show->save();

        return redirect()->route('showtimes.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $show=ShowTime::find($id);
       //delete related  file from storage
       $show->delete();
       return redirect()->route('showtimes.index');
    }
}
