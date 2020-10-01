<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;
use App\ShowTime;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $movies=Movie::all();
        //dd($items);
        return view('backend.movies.index',compact('movies'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $showtimes=ShowTime::all();
        //$movies = Movie::all();
        return view('backend.movies.create',compact('showtimes'));
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
        'movie_name'=>'required|string',
        'rating' => 'required|',
        'movie_type' => 'required|string',
        'hours' => 'required|string',
        /*'date' => 'required',*/
        'review' => 'required|string',
        /*'show_id'=>'required|string'*/
        
        ]);

        $profile=time().'.'.$request->photo->extension();
        $request->photo->move(public_path('backendtemplate/movieImg'),$profile);
        //Store Data
          $movie = new Movie;

          $movie->movie_name=$request->movie_name;
          $movie->rating=$request->rating;
          $movie->movie_type=$request->movie_type;
          $movie->hours=$request->hours;
          /*$movie->date=$request->date;*/
          $movie->photo=$profile;
          $movie->review=$request->review;
          /*$movie->show_id=$request->show_id;*/
          $movie->save();

          return redirect()->route('movies.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {   
        $movie=Movie::find($id);
        $show=ShowTime::find($movie->show_id);
        return  view('backend.movies.show',compact('movie','show'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $movie = Movie::find($id);
        //$showtimes=ShowTime::all();
         //dd($item);
         return view('backend.movies.edit',compact('movie'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Movie $movie)
    {
        $request -> validate([
        
        'movie_name' =>'required',
        'rating' =>'required',
        'movie_type' =>'required',
        'hours' =>'required',
        //'date' =>'required',
        'review' =>'required'
        ]);

        //$movie = Movie::find($id);

        if($request->hasFile('nextphoto')){
            $profile=time().'.'.$request->nextphoto->extension();

             $request->nextphoto->move(public_path('backendtemplate/movieImg'),$profile);

        }else{
            $profile=$movie->photo;
        }
        //Update Data
        
         
        $movie->movie_name=$request->movie_name;
        $movie->rating=$request->rating;
        $movie->movie_type=$request->movie_type;
        $movie->hours=$request->hours;
        //$movie->date=$request->date;
        $movie->photo=$profile;
        //$movie->show_id=$request->show_id;
        $movie->review=$request->review;

        $movie->save();

        //Redirect
        return redirect()->route('movies.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $movie = Movie::find($id);
       //delete related  file from storage
       $movie->delete();
       return redirect()->route('movies.index');
    }
}
