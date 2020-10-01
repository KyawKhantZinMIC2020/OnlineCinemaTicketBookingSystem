@extends('backendtemplate')
@section('title','Movies')
@section('style')
<style type="text/css">
	#info label{
		font-size: 18px;
	}
</style>
@endsection
@section('content')
<div class="container ">  
	<h2 class="text-center text-success">Movie Detail</h2>

	<div class="row my-5">
		<div class="col-12 col-md-5 offset-md-1">
			<div>
				<img src="{{asset('backendtemplate/movieImg/'.$movie->photo)}}" class=" w-100 h-100">
			</div>	
		</div>
		<div class="col-12 col-md-5" id="info">
			<div class="form-group">
				<label for="name">Movie Name: </label>
				<div class=" d-inline text-dark font-weight-bold ml-2">{{$movie->movie_name}}</div>
			</div>
			<div class="form-group">
				<label for="rating">Rating: </label>
				<span class="text-dark font-weight-bold ml-2">{{$movie->rating}}</span>
			</div>
			<div class="form-group">
				<label for="type">Movie Type: </label>
				<span class="text-dark font-weight-bold ml-2">{{$movie->movie_type}}</span>
			</div>
			<div class="form-group">
				<label for="hour">Duration: </label>
				<span class="text-dark font-weight-bold ml-2">{{$movie->hours}}</span>
			</div>
			<!-- <div class="form-group">
				<label for="hour">Date: </label>
				<span class="text-dark font-weight-bold ml-2">{{$movie->date}}</span>
			</div> -->
			<div class="form-group">
				<label for="review">Review: </label>
				<span class="font-weight-bold ml-2 text-dark">{{$movie->review}}</span>
			</div>
			
		</div>
	</div>
	
</div>

@endsection