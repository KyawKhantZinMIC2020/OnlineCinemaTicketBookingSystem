@extends('backendtemplate')
@section('title','Rows')
@section('style')
@endsection
@section('content')

<div class="container">
	<h2 class="text-center text-success">Row Detail</h2>
	<div class="row my-5">
		<div class="col-12 col-md-4 col-sm-3">
			<div>
				<label for="name">Price: </label>
				<div class=" d-inline text-dark font-weight-bold ml-2">{{$row->price}}</div>
			</div>
			<div>
				<label for="type">Row: </label>
				<span class="text-dark font-weight-bold ml-2">{{$row->row}}</span>
			</div>

		</div>
	</div>
</div>

@endsection