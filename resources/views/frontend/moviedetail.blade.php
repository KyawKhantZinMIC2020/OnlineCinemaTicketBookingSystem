@extends('frontendtemplate')
@section('title','Home')
@section('style')
<style type="text/css">
	body{
		background: black;
	}
	#available .hover{
		transition: .5s;
	}
	#available .hover .img{
		overflow: hidden;
	}
	#available img{
		transition: .5s;
	}
	#available .hover:hover .img{
		width: 320px;
		height: 200px;
		overflow: hidden;
	}
	#available .hover:hover .img img{
		transform:scale(1.1);
	}
	#carouselExampleIndicators img{
		width: 160px; 
		height: 220px;
	}
	#carouselExampleIndicators .row .col-2{
		opacity:.5;
		transition: .6s ease-in-out;
	}
	#carouselExampleIndicators .row .col-2:hover{
		opacity:1;
		/*transition: .6 ease-in-out;*/
	}



</style>
@endsection
@section('content')
<div class="container">
  <h3 class="my-5 text-light">Available Movies</h3>
  <div class="row my-4" id="available">
    <div class="card" style="width: 18rem;">
      <img class="card-img-top" src="{{asset('backendtemplate/movieimg/' . $movie->photo)}}" alt="Card image cap">
      <div class="card-body bg-dark">
        <h5 class="card-title text-light">{{$movie->movie_name}}</h5>
        <p class="card-text text-light">Rating: {{$movie->rating}}</p>
        <p class="card-text text-light">Movie_type: {{$movie->movie_type}}</p>
        <p class="card-text text-light">Duration: {{$movie->hours}}</p>
        <p class="card-text text-light">Review: {{$movie->review}}</p>
        @auth
          <a href="{{ route('booking', ['id' => $movie->id]) }}" class="btn btn-primary">Booking</a>
        @else
          <a href="{{ route('register') }}" class="btn btn-primary">Booking</a>
        @endauth
      </div>
    </div>
  </div>
  <table class="table table-dark">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Address</th>
        <th scope="col">Seats</th>
        <th scope="col">Price</th>
      </tr>
    </thead>
    <tbody>
      
      @foreach($movie->halls as $key => $hall)
      <tr onclick="location.href='{{route('showhall', ['id' => $hall->id])}}'" class="mycursor">
        <th scope="row">{{$key + 1}}</th>
        <td>{{$hall->name}}</td>
        <td>{{$hall->address}}</td>
        <td>{{$hall->quantity}}</td>
        <td>{{$hall->price}}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
  <h3 class="my-3 text-light">Upcoming Movies</h3>
  <div id="carouselExampleIndicators" class="carousel slide my-5" data-ride="carousel">
  <!-- <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
-->  <div class="carousel-inner">
  <div class="carousel-item active">
    <div class="row">
     <div class="col-2">
      <div class="img">
       <img src="https://channelmyanmar.org/wp-content/uploads/2020/09/magic-kids-136x200.jpg">
     </div>
   </div>
   <div class="col-2">
    <div class="img">
     <img src="https://image.tmdb.org/t/p/w185/zA5sgJ60b7zny9hsREOwtd5yG4r.jpg">
   </div>
 </div>
 <div class="col-2">
  <div class="img">
   <img src="https://channelmyanmar.org/wp-content/uploads/2020/09/1_Q4W6eJbUdB7KIGvA8EoY0Q-141x200.jpeg">
 </div>
</div>
<div class="col-2">
  <div class="img">
   <img src="https://channelmyanmar.org/wp-content/uploads/2020/09/magic-kids-136x200.jpg" >
 </div>
</div>
<div class="col-2">
  <div class="img">
   <img src="https://channelmyanmar.org/wp-content/uploads/2020/09/magic-kids-136x200.jpg" >
 </div>
</div>
<div class="col-2">
  <div class="img">
   <img src="https://channelmyanmar.org/wp-content/uploads/2020/09/magic-kids-136x200.jpg" >
 </div>
</div>
</div>
</div>
<div class="carousel-item">
 <div class="row">
   <div class="col-2">
    <div class="img">
     <img src="https://channelmyanmar.org/wp-content/uploads/2020/09/magic-kids-136x200.jpg" >
   </div>
 </div>
 <div class="col-2">
  <div class="img">
   <img src="https://channelmyanmar.org/wp-content/uploads/2020/09/magic-kids-136x200.jpg" >
 </div>
</div>
<div class="col-2">
  <div class="img">
   <img src="https://channelmyanmar.org/wp-content/uploads/2020/09/magic-kids-136x200.jpg" >
 </div>
</div>
<div class="col-2">
  <div class="img">
   <img src="https://channelmyanmar.org/wp-content/uploads/2020/09/magic-kids-136x200.jpg" >
 </div>
</div>
<div class="col-2">
  <div class="img">
   <img src="https://channelmyanmar.org/wp-content/uploads/2020/09/magic-kids-136x200.jpg" >
 </div>
</div>
<div class="col-2">
  <div class="img">
   <img src="https://channelmyanmar.org/wp-content/uploads/2020/09/magic-kids-136x200.jpg" >
 </div>
</div>
</div>
</div>
<div class="carousel-item">
 <div class="row">
   <div class="col-2 ">
    <div class="img">
     <img src="https://channelmyanmar.org/wp-content/uploads/2020/09/magic-kids-136x200.jpg" >
   </div>
 </div>
 <div class="col-2">
  <div class="img">
   <img src="https://channelmyanmar.org/wp-content/uploads/2020/09/magic-kids-136x200.jpg" >
 </div>
</div>
<div class="col-2">
  <div class="img">
   <img src="https://channelmyanmar.org/wp-content/uploads/2020/09/magic-kids-136x200.jpg" >
 </div>
</div>
<div class="col-2">
  <div class="img">
   <img src="https://channelmyanmar.org/wp-content/uploads/2020/09/magic-kids-136x200.jpg" >
 </div>
</div>
<div class="col-2">
  <div class="img">
   <img src="https://channelmyanmar.org/wp-content/uploads/2020/09/magic-kids-136x200.jpg" >
 </div>
</div>
<div class="col-2">
  <div class="img">
   <img src="https://channelmyanmar.org/wp-content/uploads/2020/09/magic-kids-136x200.jpg" >
 </div>
</div>
</div>
</div>
</div>
  <!-- <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
-->



@endsection
