@extends('backendtemplate')
@section('style')
@endsection
@section('content')

<div class="container">
	<h2 class="text-left text-success" id="title">Create Show</h2>
	<div class="row">
		<div class="col-12   p-5 my-2 bg-dark text-light rounded">
			<form method="post" action="{{route('showtimes.store')}}" enctype="multipart/form-data">
				@csrf
				<!-- <div class="form-group row">
					<label for="id" class="col-md-2">Show Id</label>
					<input type="text" class="form-control col-md-10" id="id" name="id">
				</div> -->
				<div class="form-group row">
					<label for="id" class="col-md-2">Show Time</label>
					<input type="text" class="form-control col-md-10" id="id" name="showtime">
				</div>
				<div class="form-group row">
					<label for="date" class="col-md-2">Date</label>
					<input type="date" class="form-control col-md-10" id="date" name="date">
				</div>

				<!-- hall name and id -->
				<div class="form-group row">
					<label for="name" class="col-sm-2 col-form-label">Movie</label>
					<div class="col-sm-10">
						<select name="movie" class="form-control">
							<optgroup label="Choose Movie Name">
								@foreach($movies as $movie)
								<option value="{{$movie->id}}">{{$movie->movie_name}}</option>
								@endforeach
							</optgroup>
						</select>
					</div>
				</div>

				<div class="form-group row">
					<label for="name" class="col-sm-2 col-form-label">Hall</label>
					<div class="col-sm-10">
						<select name="hall" class="form-control">
							<optgroup label="Choose Hall Name">
								@foreach($halls as $hall)
								<option value="{{$hall->id}}">
								{{$hall->name}}</option>
								@endforeach
							</optgroup>
						</select>
					</div>
				</div>


				<div class="form-group text-right mt-4">
					<input type="submit" name="btnsubmit" class="btn btn-sm btn-success" value="Create">
				</div>
			</form>
		</div>
	</div>
</div>
@endsection
