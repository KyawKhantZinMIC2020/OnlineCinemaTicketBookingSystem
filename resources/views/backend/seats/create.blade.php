@extends('backendtemplate')
@section('style')
@endsection
@section('content')

<div class="container">
	<h2 class="text-left text-success" id="title">Create Seat</h2>
	<div class="row">
		<div class="col-12   p-5 my-2 bg-dark text-light rounded">
			<form method="post" action="{{route('seats.store')}}" enctype="multipart/form-data">
				@csrf
				<div class="form-group row">
					<label for="seatno">Seat No</label>
					<input type="text" class="form-control" id="seatno" name="seatno">
				</div>

				<!-- hall name and id -->
				<div class="form-group row">
					<label for="name" class="col-sm-2 col-form-label">Hall Name</label>
					<div class="col-sm-10">
						<select name="hall_id" class="form-control">
							<optgroup label="Choose Hall Name">
								@foreach($halls as $hall)
								<option value="{{$hall->id}}">{{$hall->name}}</option>
								@endforeach
							</optgroup>
						</select>
					</div>
				</div>

				<!-- row price and id -->
				<div class="form-group row">
					<label for="price" class="col-sm-2 col-form-label">Price</label>
					<div class="col-sm-10">
						<select name="row_id" class="form-control">
							<optgroup label="Choose Row Price">
								@foreach($rows as $row)
								<option value="{{$row->id}}">{{$row->price}}</option>
								@endforeach
							</optgroup>
						</select>
					</div>
				</div>

				
				<div class="form-group text-right mt-4">
					<input type="submit" class="btn btn-sm btn-success" value="Create">
				</div>
			</form>
		</div>
	</div>
</div>
@endsection