@extends('backendtemplate')
@section('title','Halls')
@section('style')
@endsection
@section('content')

<div class="container">
	<h2 class="text-center text-success">Hall Detail</h2>
	<div class="row my-5">
		<div class="col-12 col-md-5 offset-md-1">
			<div>
				<label for="name" class="text-success font-weight-bold">Name: </label>
				<div class=" d-inline text-dark font-weight-bold ml-2">{{$hall->name}}</div>
			</div>
			<div>
				<label for="address" class="text-success font-weight-bold">Address: </label>
				<span class="text-dark font-weight-bold ml-2">{{$hall->address}}</span>
			</div>
			<div>
				<label for="quantity" class="text-success font-weight-bold">No fo Seat: </label>
				<span class="text-dark font-weight-bold ml-2">{{$hall->quantity}}</span>
			</div>

			<div>
				<label for="quantity" class="text-success font-weight-bold">Price: </label>
				<span class="text-dark font-weight-bold ml-2">{{$hall->price}}</span>
			</div>



		</div>
	</div>
</div>

@endsection