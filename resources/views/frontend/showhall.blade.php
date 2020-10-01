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
		<!-- <h3 class="my-5 text-light">Available Movies</h3>
		<div class="row my-4" id="available"> -->
			
		</div>
		<h3 class="my-3 text-light">Available Movies</h3>
<div id="carouselExampleIndicators" class="carousel slide my-5" data-ride="carousel">
  <!-- <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
 -->
  <table class="table table-dark">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Address</th>
        <th scope="col">Seats</th>
        <th scope="col">Price</th>
        <th scope="col">Movie</th>
        <th scope="col">Duration</th>
        <th scope="col">Show Time</th>
        <th scope="col">Date</th>
      </tr>
    </thead>
    <tbody>
      
        @foreach($hall->movies as $key => $movie)
        <tr>
          <th scope="row">{{$key + 1}}</th>
          <td>{{$hall->name}}</td>
          <td>{{$hall->address}}</td>
          <td>{{$hall->quantity}}</td>
          <td>{{$hall->price}}</td>
          <td>{{$movie->movie_name}}</td>
          <td>{{$movie->hours}}</td>
          <td>{{$movie->showtime}}</td>
          <td>{{$movie->date}}</td>
        </tr>
        @endforeach
    </tbody>
  </table>
  <div class="carousel-inner">
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
 --></div>
</div>

@endsection
