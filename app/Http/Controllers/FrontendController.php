<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ShowTime;
use App\Hall;
use App\Movie;
class FrontendController extends Controller
{
	public function home()   
	{
		$showtimes = ShowTime::all()->map(function($showtime){
			$showtime->movie->photo = url('backendtemplate/movieImg/'.$showtime->movie->photo);
			$showtime->hall;
			return $showtime;
		});
		return view('frontend.home', compact('showtimes'));	
	}
	public function hall()
	{
		$halls = Hall::all();
		return view('frontend.hall', compact('halls'));
	}
	public function upcoming(){
		return view('frontend.upcoming');
	}
	public function booking($id){
		$movie = Movie::find($id);
		$movie->halls;
		return view('frontend.booking', compact('movie'));
	}
	public function showHall($id){
		$hall = Hall::find($id);
		$hall->movies = $hall->movies->map(function($movie){
			$movie['showtime'] = $movie->pivot->showtime;
			$movie['date'] = $movie->pivot->date;
			return $movie;
		});
		return view('frontend.showhall', compact('hall'));
	}
	public function moviedetail($id){
		$movie = ShowTime::find($id)->movie;
		foreach ($movie->halls as $key => $hall) {
			# code...
			$movie->halls[$key]['showtime'] = $hall->pivot->showtime;
			$movie->halls[$key]['date'] = $hall->pivot->date;
		}
		return view('frontend.moviedetail', compact('movie'));
	}
}
