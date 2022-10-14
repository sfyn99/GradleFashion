@extends('layout')
@section('content')
<div class="container">
          <div class="row">
      
            
              <div class="col-md-4">
              <div class="card">
              <a href=""> <img class="card-img-top" src="/images/{{$Products->productImage}}" style="width:200px; height:200px;" alt=""> </a>
                  <div class="card-body">
                     <div class="row">
                     @foreach($subProduct as $s)
                     <div class="col-md-2">
                    <img src="/subProductImages/{{$s->subProductImage}}" style="width:50px; height:50px;">
                     </div>
                     @endforeach
                     </div>
                  </div>
              </div>
              </div>
             
            
          </div>
      </div>
      @endsection