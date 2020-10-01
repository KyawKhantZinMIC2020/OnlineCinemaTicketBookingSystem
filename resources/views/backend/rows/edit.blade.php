@extends('backendtemplate')
@section('style')
@endsection
@section('content')

<div class="container">
	<h2 class="text-left text-success" id="title">Create Row</h2>
	<div class="row">
		<div class="col-12   p-5 my-2 bg-dark text-light rounded">
			<form method="post" action="{{route('rows.update',$row->id)}}" enctype="multipart/form-data">
				@csrf
				@method('PUT')
				<div class="form-group row">
					<label for="price">Price</label>
					<input type="text" class="form-control" id="price" name="price" value="{{$row->price}}">
				</div>
				<div class="form-group row">
					<label for="row">Row</label>
					<input type="text" class="form-control" id="row" name="row" value="{{$row->row}}">
				</div>

				<div class="form-group text-right mt-4">
					<input type="submit" class="btn btn-success" value="Update Row">
				</div>
			</form>
		</div>
	</div>
</div>


@endsection