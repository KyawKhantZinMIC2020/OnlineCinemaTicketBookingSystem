@extends('backendtemplate')
@section('content')

<div class="container">
  <h2 class="text-left text-success">Movies Table</h2>
  <div>
      <a href="{{route('movies.create')}}">
        <buttn class="btn btn-outline-secondary btn-md my-2 float-right" >Add New</buttn>
      </a>
  </div>
  <table class="table table-striped table-dark table-hover text-center">
    <tr class="bg-dark text-warning ">
      <th class="font-weight-bold ">No</th>
      <th class="font-weight-bold ">Movie Name</th>
      <th class="font-weight-bold">Rating</th>
      <th class="font-weight-bold ">Movie Type</th>
      <!-- <th class="font-weight-bold">Photo</th> -->
      <th class="font-weight-bold ">Duration</th>
      <!-- <th class="font-weight-bold">Date</th> -->
      <th class="font-weight-bold ">Review</th>
      <!-- <th class="font-weight-bold ">Show Time</th> -->
      <th class="font-weight-bold">Action</th>
    </tr>
    <tbody>
      @foreach($movies as $movie)<!-- to come out data from tabel -->
    <tr>
      <input type="hidden" name="" id="deleteser" value="{{$movie->id}}">
      <td>{{$movie->id}}</td>
      <td>{{$movie->movie_name}}</td>
      <!-- <th>{{$movie->photo}}</th> -->
      <td>{{$movie->rating}}</td>
      <td>{{$movie->movie_type}}</td>
      <td>{{$movie->hours}}</td>
      <!-- <td>{{$movie->date}}</td> -->
      <td>{{$movie->review}}</td>
      <!-- <td>{{$movie->show_id}}</td> -->
      <td class="text-center">

        <a href="{{route('movies.edit',$movie->id)}}" class="btn btn-outline-info"><i class="fas fa-pencil-alt"></i></a>

        <a href="{{route('movies.show',$movie->id)}}" class="btn btn-outline-success"><i class="fas fa-info-circle"></i></a>

        <form method="post" action="{{route('movies.destroy',$movie->id)}}" class="d-inline">
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