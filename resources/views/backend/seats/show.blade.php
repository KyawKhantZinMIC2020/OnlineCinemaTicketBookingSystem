@extends('backendtemplate')
@section('title','Seats')
@section('style')
@endsection
@section('content')

<div class="container">
	<h2 class="text-center text-success font-weight-bold">Seat Detail</h2>
	<div class="row my-5">
		<div class="col-12 col-md-10 ml-5 pl-5 mx-3 col-sm-3">
			
		<table class="table table-bordered">
					<tbody>
						<tr>
							<td class="text-primary font-weight-bold">Seat No:</td>
							<td class="font-weight-bold">{{$seat->seatno}}</td>
						</tr>
						<tr>
							<td class="text-primary font-weight-bold">Price:</td>
							<td class="font-weight-bold">{{$row->price}}</td>
						</tr>
						<tr>
							<td class="text-primary font-weight-bold" >Hall Name:</td>
							<td class="font-weight-bold">{{$hall->name}}</td>
						</tr>
					</tbody>
				</table>
				<a href="{{route('seats.index')}}" class="float-right"><i class="far fa-lg fa-hand-point-left"></i></a>
		</div>
	</div>
</div>

@endsection