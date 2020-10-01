@extends('backendtemplate')
@section('style')
@endsection
@section('content')

<div class="container">
	<h2 class="text-left text-success font-weight-bold" id="title">Create Row</h2>
	<div class="row">
		<div class="col-12   p-5 my-2 bg-dark text-light rounded">
			<form method="post" action="{{route('rows.store')}}" enctype="multipart/form-data">
				@csrf
				<div class="form-group row">
					<label for="price" class="col-sm-2 col-form-label">Price</label>
					<input type="text" class="form-control col-sm-10" id="price" name="price">
				</div>
				<div class="form-group row">
					<label for="row" class="col-sm-2 col-form-label">Row</label>
					<input type="text" class="form-control col-sm-10" id="row" name="row">
				</div>

				<div class="form-group text-right mt-4">
					<input type="submit" class="btn btn-success" value="Create">
				</div>
			</form>
		</div>
	</div>
</div>


@endsection