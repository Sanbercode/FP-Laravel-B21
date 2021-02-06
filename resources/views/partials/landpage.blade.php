@extends('partials.master')

@section('navbar')
    <li class="active">
        <a href="/">Home</a>
    </li>
    <li>
        <a href="{{route('contents')}}">Content</a>
    </li>
    <li>
        <a href="{{route('login')}}">Login</a>
    </li>
    <li>
        <a href="{{route('register')}}">Register</a>
    </li>
@endsection

@section('banner')
<div class="banner-slider">
         <div class="container-fluid">
            <div class="row">
               <div class="col-md-7">
                  <div id="slider_main" class="carousel slide" data-ride="carousel">
                     <!-- The slideshow -->
                     <div class="carousel-inner">
                        <div class="carousel-item active">
                           <img src="{{asset('images/book1.jpg')}}" alt="#" />
                        </div>
                        <div class="carousel-item">
                           <img src="{{asset('images/book2.jpg')}}" alt="#" />
                        </div>
                     </div>
                     <!-- Left and right controls -->
                     <a class="carousel-control-prev" href="#slider_main" data-slide="prev">
                     <i class="fa fa-angle-left" aria-hidden="true"></i>
                     </a>
                     <a class="carousel-control-next" href="#slider_main" data-slide="next">
                     <i class="fa fa-angle-right" aria-hidden="true"></i>
                     </a>
                  </div>
               </div>
               <div class="col-md-5">
                  <div class="full slider_cont_section">
                     <h4>Welcome to</h4>
                     <h3>Revibook!</h3>
                     <p>Revibook (Review Book) merupakan website favorit para pecinta buku dimana para books lover dapat memberikan testimoni dan diskusi untuk buku yang pernah mereka baca.  </p>
                     <div class="button_section">
                        <a href="{{route('contents')}}">Let's Go!</a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
</div>
@endsection
