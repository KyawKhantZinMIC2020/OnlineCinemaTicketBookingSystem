@extends('backendtemplate')
@section('style')
@endsection
@section('content')

<div class="container">
	<h2 class="text-left text-success" id="title">Update Seat</h2>
	<div class="row">
		<div class="col-12 p-5 my-2 bg-dark text-light rounded">
			<form method="post" action="{{route('seats.update',$seat->id)}}" enctype="multipart/form-data">
				@csrf
				@method('PUT')
				<div class="form-group row">
					<label for="seatno">Seat No</label>
					<input type="text" class="form-control" id="seatno" name="seatno" value="{{$seat->seatno}}">
				</div>
		
				<div class="form-group row">
					<label for="hall_name" class="col-sm-2">Hall Name</label>
					<select name="hall" class="form-control col-md-10">
						<optgroup label="Choose Hall Name">
							@foreach($halls as $hall)
								<option value="{{$hall->id}}"
									@if($hall->id==$seat->hall_id)
									{{'selected'}}
									@endif>{{$hall->name}}
								</option>
							@endforeach
						</optgroup>
					</select>
				</div>

				<div class="form-group row">
					<label for="price" class="col-sm-2">Price</label>
					<select name="row" class="form-control col-md-10">
						<optgroup label="Choose Price">
							@foreach($rows as $row)
								<option value="{{$row->id}}"
									@if($row->id==$seat->row_id)
									{{'selected'}}
									@endif>{{$row->price}}
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