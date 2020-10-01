@extends('backendtemplate')
@section('title','Movies')
@section('content')

<div class="container">  
	<h2 class="text-left text-success">Movie Edit Form</h2>

	<div class="row">
		<div class="col-12 p-5 my-4 bg-dark text-light rounded">
			<form method="post" action="{{route('movies.update',$movie->id)}}" enctype="multipart/form-data">
		@csrf
		@method('PUT')
		<div class="form-group row">
					<!-- <label for="review">Picture</label> -->
					<img src="{{asset('backendtemplate/movieImg/'.$movie->photo)}}" class="form-control w-25 h-50 ml-2">
				</div>
				<div class="form-group row">
					<label for="name">Movie Name</label>
					<input type="text" class="form-control" id="movie" name="movie_name" value="{{$movie->movie_name}}">
				</div>
				<div class="form-group row">
					<label for="rating">Rating</label>
					<input type="number" class="form-control" id="rating" name="rating"
					value="{{$movie->rating}}">
				</div>
				<div class="form-group row">
					<label for="type">Movie Type</label>
					<input type="text" class="form-control" id="type" name="movie_type"
					value="{{$movie->movie_type}}">
				</div>
				<div class="form-group row">
					<label for="hour">Duration</label>
					<input type="text" class="form-control" id="hour" name="hours" value="{{$movie->hours}}">
				</div>
				<!-- <div class="form-group row">
					<label for="date">Date</label>
					<input type="date" class="form-control" id="hour" name="date" value="{{$movie->date}}">
				</div> -->
				<div class="form-group row">
					<label for="review">Review</label>
					<input type="text" class="form-control" id="review" name="review" value="{{$movie->review}}">
				</div>

				<div class="form-group row">
					<label for="review">Picture</label>
					<input type="file" name="nextphoto" class="form-control bg-dark border-0 text-light pl-0">
				</div>
				
				
				<div class="form-group text-right mt-4">
					<button type="submit" class="btn btn-success">Update Movie</button>
				</div>
			</form>
		</div>
	</div>
	
</div>

@endsection