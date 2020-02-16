@extends('layout/user')
@section('title','About')

<link rel="stylesheet" type="text/css" href="{{ url('/css/about.css') }}" />

@section('lembarTengah')

<div class="judul"><h2 allign="right">All Data</h2></div>
<br>
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nama</th>
      <th scope="col">Password</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
  @if(isset($allData))
    @foreach($allData as $user => $value)
      <tr>
        <th scope="row">{{$value['ID']}}</th>
        <td>{{$value['nama']}}</td>
        <td>{{$value['password']}}</td>
        <td>@mdo</td>
      </tr>
    @endforeach
  @endif
  </tbody>
</table>
@endsection

@section('lembarKanan')
<div class="judul"><h2>Add some Data Here!</h2></div><br>
<form method="post" action="{{url('About/Proses/')}}">
{{csrf_field()}}
<div class="form-group row">
    <div class="col-sm-8">
      <label for="inputNama" class="col-sm-5 col-form-label">ID</label>
      <input type="number" class="form-control" name="id" value="{{old('id')}}" >
    </div>
  </div>
<div class="form-group row">
    <label for="inputNama" class="col-sm-5 col-form-label">Nama</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" name="inputNama" value="{{old('inputNama')}}">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword" class="col-sm-5 col-form-label">Password</label>
    <div class="col-sm-8">
      <input type="password" class="form-control" name="inputPassword" value="{{old('inputPassword')}}">
    </div>
  </div>
  <input class="btn btn-primary" type="submit" value="Add">
</form>
<hr></hr>
@if (isset($newData))
  <div class="judul"><h2>New Data</h2>
    <hr></hr>
    <p>id : {{$newData->id}}</p>
    <p>Nama : {{$newData->inputNama}}</p>
    <p>Password : {{$newData->inputPassword}}</p>
  </div>
  <br><br>
@endif

@endsection