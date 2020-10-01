@extends('backendtemplate')
@section('style')
@endsection
@section('content')

<div class="container">
  <h2 class="text-left text-success">Seat Table</h2>
  <div>
      <a href="{{route('seats.create')}}">
        <buttn class="btn btn-sm btn-secondary btn-md my-3 float-right" >Add New Seat</buttn>
      </a>
  </div>
  <table class="table table-striped table-dark table-hover text-center">
    <tr class="bg-dark text-warning ">
      <th class="font-weight-bold ">Id</th>
      <th class="font-weight-bold ">Seat No</th>
      <th class="font-weight-bold ">Price</th>
      <th class="font-weight-bold">Hall Name</th>
      <th class="font-weight-bold">Action</th>
    </tr>
    <tbody>
      @foreach($seats as $seat)<!-- to come out data from tabel -->
    <tr>
      <input type="hidden" name="" id="deleteser" value="{{$seat->id}}">
      <td>{{$seat->id}}</td>
      <td>{{$seat->seatno}}</td>
      <td>{{$seat->row->price}}</td>
      <td>{{$seat->hall->name}}</td>
      <td>
        
        <!-- update -->
        <a href="{{route('seats.edit',$seat->id)}}" class="btn btn-outline-info"><i class="fas fa-pencil-alt"></i></a>

        <!-- detail -->
        <a href="{{route('seats.show',$seat->id)}}" class="btn btn-outline-success"><i class="fas fa-info-circle"></i></a>

        <!-- delete -->
        <form method="post" action="{{route('seats.destroy',$seat->id)}}" class="d-inline">
          @csrf
          @method('Delete')
           <button type="submit" class="btn btn-outline-danger"><i class="fas fa-ban"></i></button>
        </form>
      </td>
    </tr>

    @endforeach


    </tbody>
  </table>
</div>

@endsection