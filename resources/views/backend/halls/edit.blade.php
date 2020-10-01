@extends('backendtemplate')
@section('style')
@endsection
@section('content')

<div class="container">
	<h2 class="text-left text-success" id="title">Create Hall</h2>
	<div class="row">
		<div class="col-12 p-5 my-2 bg-dark text-light rounded">
			<form method="post" action="{{route('halls.update',$hall->id)}}" enctype="multipart/form-data">
				@csrf
				@method('PUT')
				<div class="form-group row">
					<label for="name">Name</label>
					<input type="text" class="form-control" id="name" name="name" value="{{$hall->name}}">
				</div>

				<div class="form-group row">
					<label for="address">Address</label>
					<input type="text" class="form-control" id="address" name="address" value="{{$hall->address}}">
				</div>

				<div class="form-group row">
					<label for="quantity">Quantity</label>
					<input type="number" class="form-control" id="quantity" name="quantity" value="{{$hall->quantity}}">
				</div>

				<div class="form-group row">
					<label for="price">Price</label>
					<input type="text" class="form-control" id="price" name="price" value="{{$hall->price}}">
				</div>

				<div class="form-group text-right mt-4">
					<button type="submit" class="btn btn-success">Update Hall</button>
				</div>
			</form>
		</div>
	</div>
</div>
@endsection