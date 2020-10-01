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

  .mycursor
  {
    cursor: pointer;
  }
  .mycursor:hover
  {
    color:yellow;
    cursor: pointer;
  }


/* .container{
  max-width: 540px;
  display: flex;
  flex-wrap: wrap;
}
.item{
  display: flex;
  align-items: center;
  justify-content: center;
  margin: 2px;
  min-width: 50px;
  height: 50px;
  background-color: yellow;
}
.seat{
  width: 40px;
  display: flex;
  align-items: center;
  justify-content: center;
  height:40px;
  border-radius: 50%;
}
.available_seat{            
  background-color: white;
}
.not_available_seat{
  background-color: black;
  color:white;
}*/

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
    </tr>
  </thead>
  <tbody>
    
    @foreach($halls as $key => $hall)
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


<!-- seat -->
<!--   <?php 
$not_available_seat = array(1, 5, 25, 66, 78 ,91);
?>

<div class="container">
  <?php for ($i=1; $i <101 ; $i++) { ?>
    <div class="item">
      <?php if( in_array($i, $not_available_seat)){ ?>
        <span class="seat not_available_seat">
          <?= $i ?> 
        </span>
      <?php }else{ ?>
        <span class="seat available_seat">
          <?= $i ?> 
        </span>
      <?php } ?>
    </div>
  <?php } ?>
</div>


</div>
</div> -->

<!-- endseat -->

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
