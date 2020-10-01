@extends('backendtemplate')
@section('style')
@endsection
@section('content')

<div class="container">
  <h2 class="text-left text-success">Hall Table</h2>
  <div>
      <a href="{{route('halls.create')}}">
        <buttn class="btn btn-secondary btn-md my-3 float-right" >Add New Hall</buttn>
      </a>
  </div>
  <table class="table table-striped table-dark table-hover text-center">
    <tr class="bg-dark text-warning ">
      <th class="font-weight-bold ">No</th>
      <th class="font-weight-bold ">Name</th>
      <th class="font-weight-bold ">Address</th>
      <th class="font-weight-bold">Quantity</th>
      <th class="font-weight-bold">Price</th>
      <th class="font-weight-bold">Action</th>
    </tr>
    <tbody>
      @foreach($hall as $hall)<!-- to come out data from tabel -->
    <tr>
      <input type="hidden" name="" id="deleteser" value="{{$hall->id}}">
      <td>{{$hall->id}}</td>
      <td>{{$hall->name}}</td>
      <td>{{$hall->address}}</td>
      <td>{{$hall->quantity}}</td>
      <td>{{$hall->price}}</td>

      <td class="text-center">

        <!-- update -->
        <a href="{{route('halls.edit',$hall->id)}}" class="btn btn-outline-info"><i class="fas fa-pencil-alt"></i></a>

        <!-- detail -->
        <a href="{{route('halls.show',$hall->id)}}" class="btn btn-outline-success"><i class="fas fa-info-circle"></i></a>

        <!-- delete -->
        <form method="post" action="{{route('halls.destroy',$hall->id)}}" class="d-inline">
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