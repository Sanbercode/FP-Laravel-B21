@extends('partials.master')


@section('content')
<div class="jumbotron">
    <img src="{{ url('/data_file/'.$post->cover) }}" alt="" style="width:200px;">
    <h1 class="display-4">Judul buku  : {{$post -> judul}}</h1>
    <p class="lead">Tahun Diterbitkan : {{$post -> tahun}}</p>
    <p class="lead">Penulis : {{$post -> penulis}}</p>
    <p class="lead">Penerbit          : {{$post -> penerbit}}</p>
    <div class="lead">
        Genre :
        @forelse($post->genre as $Genre)
           <button class="btn btn-warning btn-sm">{{$Genre['nama']}}</button>

        @empty
            No Data
        @endforelse

    </div>
    <hr class="my-4">
    <p>Sinopsis: <break> {{$post -> sinopsis}}</p>
    <div class="lead my-4">
        <a class="btn btn-primary btn-lg" href="/contents/{{$post->id}}/review" role="button">Tambahkan Review</a>
        <a class="btn btn-success btn-lg" href="/cetak_pdf/{{$post->id}}" role="button">Download</a>
        <a href="{{route('contents')}}" class="btn btn-danger btn-lg" role="button">Kembali</a>
    </div>
    <hr class="my-4">
    <h1 class="display-5">Review Buku</h1>
    @forelse($review as $rev)
        <div class="card mb-4" style="width: 120rem;">
            <div class="card-body">
                <h3 class="card-title">Reviewer : {{$rev->user->name}}</h3>
                <h6 class="card-subtitle text-muted">Rating : {{$rev->rating}}/9 </h6>
                <p class="card-text">
                        {{$rev->isi}}
                </p>
            </div>
        </div>
    @empty
        <div class="card mb-4" style="width: 120rem;">
            <div class="card-body">
                <h3 class="card-title">No Review Yet</h3>
            </div>
        </div>
    @endforelse
</div>
@endsection
