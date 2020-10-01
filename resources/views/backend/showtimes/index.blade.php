@extends('backendtemplate')
@section('style')
@endsection
@section('content')

<div class="container">
  <h2 class="text-left text-success">ShwoTime Table</h2>
  <div>
      <a href="{{route('showtimes.create')}}">
        <buttn class="btn btn-sm btn-secondary btn-md my-3 float-right" >Add New Time</buttn>
      </a>
  </div>
  <table class="table table-striped table-dark table-hover text-center">
    <tr class="bg-dark text-warning ">
      <th class="font-weight-bold ">Show Id</th>
      <th class="font-weight-bold ">ShowTime</th>
      <th class="font-weight-bold ">Date</th>
      <th class="font-weight-bold">Movie Name</th>
      <th class="font-weight-bold">Hall Name</th>
      <th class="font-weight-bold">Action</th>
    </tr>
    <tbody>
      @foreach($showtime as $showT)<!-- to come out data from tabel -->
    <tr>
      <input type="hidden" name="" id="deleteser" value="{{$showT->id}}">
      <td>{{$showT->id}}</td>
      <td>{{$showT->showtime}}</td>
      <td>{{$showT->date}}</td>
      <td>{{$showT->movie->movie_name}}</td>
      <td>{{$showT->hall->name}}</td>
      <td>
        
        <!-- update -->
        <a href="{{route('showtimes.edit',$showT->id)}}" class="btn btn-outline-info"><i class="fas fa-pencil-alt"></i></a>

        <!-- detail -->
        <a href="{{route('showtimes.show',$showT->id)}}" class="btn btn-outline-success"><i class="fas fa-info-circle"></i></a>

        <!-- delete -->
        <form method="post" action="{{route('showtimes.destroy',$showT->id)}}" class="d-inline">
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