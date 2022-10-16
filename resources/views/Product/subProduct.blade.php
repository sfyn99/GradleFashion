@extends('main.layout')
@section('title')
<title>Sub Products</title>
@endsection

@section('content')


         
  
           

<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
  @foreach($subProduct->take(3) as $s)
    <div class="carousel-item @if($loop->first) active @endif">
      <img src="/subProductImages/{{$s->subProductImage}}" class="d-block w-100" alt="Image not Found" height='400px'width='200px'>
    </div>
    @endforeach
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>

  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>

</div>

<br>
<h2>Product Name</h2>
<br>
<center>
<p>{{$Product->productName}}</p>
</center>
<br>
<h2>Product price</h2>
<br>
<center>
<p>{{$Product->productPrice}}</p>
</center>
<br>
<h2>Description</h2>
<br>
<center>
<p>{{$Product->productDecript}}</p>
</center>












 
      @endsection