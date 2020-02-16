@extends('layout/user')
@section('title','Home')

<link rel="stylesheet" type="text/css" href="{{ url('/css/about.css') }}" />

@section('lembarTengah')
<div id="carouselExampleSlidesOnly" class="carousel slide carousel-fade" data-ride="carousel">
  <div class="carousel-inner" allign="center">
    <div class="carousel-item active">
        <img src="{{('img/g1.jpg')}}" class="d-block w-100" alt="..." >
    </div>
    <div class="carousel-item">
      <img src="{{('img/g2.jpg')}}" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="{{('img/g3.jpg')}}" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="{{('img/g4.jpg')}}" class="d-block w-100" alt="...">
    </div>
  </div>
</div>
@endsection

@section('lembarKanan')
<div class="judul"><h2>Welcome oy!</h2></div><br>
<div class="card" style="width: 18rem;">
  <img src="{{('img/pict.jpg')}}" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Andri Setya Hermawan</h5>
    <p class="card-text">183140914111008</p>
        <p>
    <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
        Ini web apa?
    </a>
    </p>
    <div class="collapse" id="collapseExample">
    <div class="card card-body">
        Ini web percobaan untuk belajar Laravel aja bos, maklum masih jelek namanya juga baru belajar yakan
    </div>
    </div>
  </div>
</div>
@endsection
