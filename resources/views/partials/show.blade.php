@extends('partials.master')

@section('content')
<div class="jumbotron">
    <img src="{{ url('/data_file/'.$post->cover) }}" alt="">
    <h1 class="display-4">Judul buku  : {{$post -> judul}}</h1>
    <p class="lead">Tahun Diterbitkan : {{$post -> tahun}}</p>
    <p class="lead">Penulis           : {{$post -> penulis}}</p>
    <p class="lead">Penerbit          : {{$post -> penerbit}}</p>
    <hr class="my-4">
    <p>Sinopsis: <break> {{$post -> sinopsis}}</p>
    <p class="lead">
        <a class="btn btn-primary btn-lg" href="#" role="button">Tambahkan Review</a>
    </p>
</div>     
@endsection