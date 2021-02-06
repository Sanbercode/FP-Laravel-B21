@extends('partials.master')

@section('content')

<section class="featured-places" id="blog">
        <div class="container">
            @if(session('success'))
                <div class="alert alert-success">
                    {{session('success')}}
                </div>
            @endif
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <span>Beranda</span>
                        <h2>Judul buku untuk direview :</h2>
                    </div>
                </div> 
            </div> 

            <div class="row">
            @foreach($posts as $key => $post)
                <div class="col-md-4 col-sm-6 col-xs-12 mt-5">
                    <div class="featured-item">
                        <div class="thumb">
                            <img src="{{ url('/data_file/'.$post->cover) }}" alt="">
                            <div class="overlay-content">
                                <ul>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                </ul>
                            </div>
                        </div>
                        <div class="down-content">
                            <h4>{{$post->judul}}</h4>
                            <span>Category One</span>
                            <p>{{$post->sinopsis}}</p>
                            <div class="row">
                                <div class="col-md-6 first-button">
                                    <div class="text-button">
                                        <a href="#">Review</a>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="text-button">
                                        <a href="/content/{{$post->id}}">Detail</a>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="text-button">
                                        <a href="/content/{{$post->id}}/edit">Edit Post</a>
                                    </div>
                                </div>
                                <div class="col-md-6 btn-danger">
                                    <form action="/home/content/{{$post->id}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                        <input type="submit" value="DELETE" class="btn btn-danger btn-lg btn-block">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach>
            </div>
            

        <div class="button_section d-flex justify-content-center mt-5">
        <div class="button_section d-flex justify-content-center mt-5">
        <div class="button_section d-flex justify-content-center mt-5">
            <a href="/home/content/formbuku">Tambahkan Buku</a>
        </div>
    </section>
@endsection