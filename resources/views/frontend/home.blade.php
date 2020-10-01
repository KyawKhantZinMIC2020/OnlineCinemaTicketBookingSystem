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
			@foreach($showtimes as $show)
			<!-- <?php if ($show->id<=3	): ?> -->
				<div class="col-12 col-md-4 hover" style="cursor: pointer;" onclick="location.href='{{ route("movie_detail", ["id" => $show->id]) }}'" data-id="{{$show->id}}" data-name="{{$show->movie->movie_name}}">
					<div class="img">
						<img src="{{$show->movie->photo}}" style="width: 320px; height: 200px;">
					</div>
					<h4 class="mt-3 text-secondary mb-2" style="letter-spacing: 2px;">{{$show->movie->movie_name}}</h4>	
					<p style="font-size: 15px;" class="text-secondary">{{$show->movie->movie_type}}</p>
					<p><span class="text-secondary">Time:</span><span class="text-primary ml-3">{{$show->showtime}}</span></p>	
					<p><span class="text-secondary">Hall Name:</span><span class="ml-3 text-light">{{$show->hall->name}}</span></p>	
				</div>
			<!-- <?php endif ?> -->
			@endforeach
		</div>
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
 --></div>
</div>

@endsection
