@extends('partials.master')


@section('navbar')
    <li>
        <a href="/">Home</a>
    </li>
    <li class="active">
        <a href="{{route('contents')}}">Content</a>
    </li>
    <div class="btn-group mx-3">
        <button type="button" class="btn btn-danger btn-lg dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Hi, {{Auth::user()->name ?? 'No Data'}}
        </button>
        <div class="dropdown-menu">
            <a class="dropdown-item" href="{{route('profile')}}">Profile</a>
            <a class="dropdown-item" href="{{route('contents_author')}}">My Post</a>
            <a class="dropdown-item" href="{{route('reviewAuthor')}}">My Review List</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="{{route('logout')}}">Logout</a>
        </div>
    </div>
@endsection

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
            @forelse($posts as $key => $post)
                <div class="col-md-4 col-sm-6 col-xs-12 mt-5">
                    <div class="featured-item">
                        <div class="thumb">
                            <img src="{{ url('/data_file/'.$post->cover) }}" style="width:375px;">
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
                            <p>{{Str::limit($post->sinopsis, 100)}}</p>
                            <div class="row">
                                <div class="col-md-6 first-button">
                                    <div class="text-button">
                                        <a href="/contents/{{$post->id}}/review">Add Review</a>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="text-button">
                                        <a href="/contents/{{$post->id}}">Detail</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @empty
                    <div class="my-4 mx-4">
                        <h1><b>Belum Ada Postingan</b></h1>
                    </div>
                @endforelse
            </div>
        </div>

{{--        <div class="button_section d-flex justify-content-center mt-5">--}}
{{--        <div class="button_section d-flex justify-content-center mt-5">--}}
        <div class="button_section d-flex justify-content-center mt-5">
            <a href="{{route('formBuku')}}">Tambahkan Buku</a>
        </div>
    </section>
@endsection
