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

    <div class="container mt-5">
        <div class="main-body">
            <div class="row gutters-sm">
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex flex-column align-items-center text-center">
                                <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin" class="rounded-circle" width="150">
                                <div class="mt-3">
                                    <h4>{{Auth::user()->name ?? 'No Data'}}</h4>
                                    <p class="text-secondary mb-1">{{Auth::user()->profil->pekerjaan ?? 'No Data'}}</p>
                                    <p class="text-muted font-size-sm">{{Auth::user()->profil->alamat ?? 'No Data'}}</p>
                                    <div class="row no-gutters justify-content-center">
                                        <div class="col-auto mr-1">
                                            <a href="/profile/edit" class="btn btn-outline-primary btn-lg">Edit Profile</a>
                                        </div>
                                        <div class="col-auto ml-1">
                                            <form action="{{route('deleteProfile')}}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <input type="submit" class="btn btn-danger btn-lg" value="Delete Profile">
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="card mb-3">
                        <div class="card-header">
                            Profile
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Full Name</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    {{Auth::user()->profil->nama ?? 'No Data'}}
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Age</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    {{Auth::user()->profil->umur ?? 'No Data'}}
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Address</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    {{Auth::user()->profil->alamat ?? 'No Data'}}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-5">
                        <div class="card-header">
                            Account Details
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Username</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    {{Auth::user()->name ?? 'No Data'}}
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Email</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    {{Auth::user()->email ?? 'No Data'}}
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Password</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    **********
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@push('script')
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

@endpush
