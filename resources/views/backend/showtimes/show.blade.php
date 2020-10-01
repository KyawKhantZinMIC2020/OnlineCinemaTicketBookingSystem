@extends('backendtemplate')
@section('title','ShowTimes')
@section('style')
@endsection
@section('content')

<div class="container">
	<h2 class="text-center text-success font-weight-bold">Screening Detail</h2>
	<div class="row my-5">
		<div class="col-12 col-md-10 ml-5 pl-5 mx-3 col-sm-3">
			
		<table class="table table-bordered">
					<tbody>
						<tr>
							<td class="text-primary font-weight-bold">Show Time:</td>
							<td class="font-weight-bold">{{$show->showtime}}</td>
						</tr>
						<tr>
							<td class="text-primary font-weight-bold">Date:</td>
							<td class="font-weight-bold">{{$show->date}}</td>
						</tr>
						<tr>
							<td class="text-primary font-weight-bold" >Movie Name:</td>
							<td class="font-weight-bold">{{$movie->movie_name}}</td>
						</tr>
						<tr>
							<td class="text-primary font-weight-bold" >Hall Name:</td>
							<td class="font-weight-bold">{{$hall->name}}</td>
						</tr>
					</tbody>
				</table>
				<a href="{{route('showtimes.index')}}" class="float-right"><i class="far fa-lg fa-hand-point-left"></i></a>
		</div>
	</div>
</div>

@endsection