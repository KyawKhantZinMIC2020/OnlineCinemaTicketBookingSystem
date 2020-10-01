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

 .container{
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
  background-color: blue;
}
.seat{
  width: 40px;
  padding: 20px;
  display: flex;
  align-items: center;
  justify-content: center;
  height:20px;
  border-radius: 50%;
}
.available_seat{            
  background-color: white;
}

</style>
@endsection
@section('content')
<div class="container">
  <h3 class="my-5 text-light">Available Movies</h3>
  <div class="row my-4" id="available">
   <h3>Booking Here: </h3>
   <select name="halls" id="halls">
    <option class="custom-select" value> Choose A Hall</option>
    @foreach($movie->halls as $hall)
    <option value="{{$hall->id}}" data-qty="{{$hall->quantity}}">{{$hall->name}} ( {{$hall->address}} )</option>
    @endforeach
  </select>
</div>

<div class="container" id="seat-con">

</div>

<button class="my-3 btn btn-sm btn-outline-info">Booking</button>
<!-- <h3 class="my-3 text-light">Upcoming Movies</h3>
<div id="carouselExampleIndicators" class="carousel slide my-5" data-ride="carousel">



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
  </div> -->
  <!-- <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
-->  



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
@section('script')
<script>
  $(function(){
    countno=0;
    $('#halls').on('change', function(event){
      let qty = $(this).find('option:selected').data('qty')
      let html = ''
      arr = new Array();
      for (var i = 1; i <= qty; i++) {
        html += `
        <div class="item">
        <span class="seat available_seat" data-id="${i}">
        ${i}
        </span>
        </div>
        `;
      }
      // console.log(qty)
      $('#seat-con').html(html);
      $('.seat').click(function(event) {
        /* Act on the event */
        seat = $(this).data('id');
        index = arr.indexOf(seat);
        if(index >= 0){
            arr.splice(index,1);
            countno -= 1;
          }else{
            arr.push(seat);
            countno += 1;
            $(this).addClass('bg-info');
            $(this).addClass('text-light');
          } 
          alert(arr);
      });
    })




  })
</script>
@endsection