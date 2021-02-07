@extends('partials.master')

@section('navbar')
    <li>
        <a href="/">Home</a>
    </li>
    <li>
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
<div class="mx-4 my-3">
    <h1 class="display-5">List Review Buku Anda</h1>
    <hr class="my-2">
    @forelse($authorReview as $rev)
        <div class="card mb-4" style="width: 120rem;">
            <div class="card-body">
                <h3 class="card-title">Judul : {{$rev->buku->judul}}</h3>
                <h6 class="card-subtitle text-muted">Rating : {{$rev->rating}}/9 </h6>
                <p class="card-text">
                    {{$rev->isi}}
                </p>
            </div>
            <div class="card-footer">
                <div class="row no-gutters">
                    <div class="col-auto">
                        <a href="/contents/{{$rev->id}}/edit-review" class="btn btn-primary btn-lg">Edit</a>
                    </div>
                    <div class="col-auto ml-2">
                        <form action="/reviewAuthor/{{$rev->id}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <input type="submit" class="btn btn-danger btn-lg" value="Delete">
                        </form>
                    </div>
                </div>


            </div>
        </div>
    @empty
        <div class="mb-4">
            <div class="card-body">
                <h3 class="card-title">No Data</h3>
            </div>
        </div>
    @endforelse
</div>




@endsection
