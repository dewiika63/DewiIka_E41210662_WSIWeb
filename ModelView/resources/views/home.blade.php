<!-- <!DOCTYPE html>
<html lang="{{ str_replace('_','-', app()->getLocale())}}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name')}}</title>
<head>
<body>
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4">Halaman Home</h1>
            <p1 class="lead">Halaman ini merupakan halaman home</p>
</div>
</div>
</body>
</html> -->

<!-- @extends('layouts.app')

@section('content')
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4">Halaman Home</h1>
            <p1 class="lead">Halaman ini merupakan halaman home baru</p>
        </div>
    </div>
@endsection -->

@extends('layouts.app')

@section('content')
<div class="jumbotron jumbotron-fluid">
    <div class="container">
        <h1 class="display-4">Halaman Home</h1>
        <p class="lead"> Ini adalah halaman Dewi Ika</p>
    </div>
    <p>Nama : {{$nama}}</p>
    <p>Mata Pelajaran</p>
    <ul>
        @foreach($pelajaran as $p)
        <li>{{$p}}</li>
        @endforeach
</div>
@endsection