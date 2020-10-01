@extends('backendtemplate')
@section('style')
@endsection
@section('content')

<div class="container">
  <h2 class="text-left text-success">Row Table</h2>
  <div>
      <a href="{{route('rows.create')}}">
        <buttn class="btn btn-secondary btn-md my-2 float-right" >Add New Row</buttn>
      </a>
  </div>
  <table class="table table-striped table-dark table-hover text-center">
    <tr class="bg-dark text-warning ">
      <th class="font-weight-bold ">No</th>
      <th class="font-weight-bold ">Price</th>
      <th class="font-weight-bold ">Row</th>
      <th class="font-weight-bold">Action</th>
    </tr>
    <tbody>
      @foreach($row as $row)<!-- to come out data from tabel -->
    <tr>
      <input type="hidden" name="" id="deleteser" value="{{$row->id}}">
      <td>{{$row->id}}</td>
      <td>{{$row->price}}</td>
      <td>{{$row->row}}</td>
      
    
      <td class="text-center">

        <!-- update -->
        <a href="{{route('rows.edit',$row->id)}}" class="btn btn-outline-info"><i class="fas fa-pencil-alt"></i></a>

        <!-- detail -->
        <a href="{{route('rows.show',$row->id)}}" class="btn btn-outline-success"><i class="fas fa-info-circle"></i></a>

        <!-- delete -->
        <form method="post" action="{{route('rows.destroy',$row->id)}}" class="d-inline">
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