@extends('backendtemplate')
@section('style')
@endsection
@section('content')

<div class="container">
	<h2 class="text-left text-success" id="title">Update Show Time</h2>
	<div class="row">
		<div class="col-12 p-5 my-2 bg-dark text-light rounded">
			<form method="post" action="{{route('showtimes.update',$showtime->id)}}" enctype="multipart/form-data">
				@csrf
				@method('PUT')
				<div class="form-group row">
					<label for="showtime">Show Time</label>
					<input type="text" class="form-control" id="showtime" name="showtime" value="{{$showtime->showtime}}">
				</div>

				<div class="form-group row">
					<label for="date">Date</label>
					<input type="date" class="form-control" id="date" name="date" value="{{$showtime->date}}">
				</div>
				
				<div class="form-group row">
					<label for="movie" class="col-sm-2">Movie</label>
					<select name="movie" class="form-control col-md-10">
						<optgroup label="Choose Movie Name">
							@foreach($movies as $movie)
								<option value="{{$movie->id}}"
									@if($movie->id==$showtime->movie_id)
									{{'selected'}}
									@endif>{{$movie->movie_name}}
								</option>
							@endforeach
						</optgroup>
					</select>
				</div>

				<div class="form-group row">
					<label for="hall" class="col-sm-2">Hall</label>
					<select name="hall" class="form-control col-md-10">
						<optgroup label="Choose Movie Name">
							@foreach($halls as $hall)
								<option value="{{$hall->id}}"
									@if($hall->id==$showtime->hall_id)
									{{'selected'}}
									@endif>{{$hall->name}}
								</option>
							@endforeach
						</optgroup>
					</select>
				</div>

				<div class="form-group text-right mt-4">
					<input type="submit" name="btnsubmit" class="btn btn-success btn-sm" value="Update Seat Data">
				</div>
			</form>
		</div>
	</div>
</div>
@endsection