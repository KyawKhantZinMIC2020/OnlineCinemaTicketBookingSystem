@extends('backendtemplate')
@section('style')
@endsection
@section('content')
<div class="container">
	<h2 class="text-left text-success font-weight-bold" id="title">Create Movie</h2>
	<div class="row">
		<div class="col-12 p-5 my-2 bg-dark text-light rounded">
			<form method="post" action="{{route('movies.store')}}" enctype="multipart/form-data">
		@csrf
				<div class="form-group row">
					<label for="name"class="col-sm-2 col-form-label">Movie Name</label>
					<input type="text" class="form-control col-sm-10" id="movie" name="movie_name">
				</div>
				<div class="form-group row">
					<label for="rating" class="col-sm-2 col-form-label">Rating</label>
					<input type="number" class="form-control col-sm-10" id="rating" name="rating">
				</div>
				<div class="form-group row">
					<label for="type" class="col-sm-2 col-form-label">Movie Type</label>
					<input type="text" class="form-control col-sm-10" id="type" name="movie_type">
				</div>
				<div class="form-group row">
					<label for="hour" class="col-sm-2 col-form-label">Duration</label>
					<input type="text" class="form-control col-sm-10" id="hour" name="hours">
				</div>
				<!-- <div class="form-group row">
					<label for="date" class="col-sm-2 col-form-label">Date</label>
					<input type="date" class="form-control col-sm-10" id="hour" name="date">
				</div> -->
				<div class="form-group row">
					<label for="review" class="col-sm-2 col-form-label">Review</label>
					<input type="text" class="form-control col-sm-10" id="review" name="review">
				</div>

				<!-- <div class="form-group row">
					<label for="review" class="col-sm-2 col-form-label">Show Time</label>
					<select class="custom-select custom-select-sm mb-3 col-sm-10" name="show_id">
						<option>--Select Show Time--</option>
						@foreach($showtimes as $show_t)
						<option value="{{$show_t->id}}">{{$show_t->showtime}}</option>
						@endforeach
					</select>
				</div> -->

				<div class="form-group row">
					<label for="review" class="col-sm-2 col-form-label">Picture</label>
					<input type="file" name="photo" class="form-control col-sm-10  bg-dark border-0 text-light pl-0" id="review">
				</div>
				<div class="form-group text-right mt-4">
					<input type="submit" class="btn btn-success" value="Create">
				</div>
			</form>
		</div>
	</div>
</div>


@endsection