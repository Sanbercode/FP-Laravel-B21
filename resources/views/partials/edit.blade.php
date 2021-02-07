<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Input Buku</title>

    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

    <!-- Main CSS-->
    <link href="{{asset('/form-buku/css/main.css')}}" rel="stylesheet" media="all">
</head>

<body>
<div class="page-wrapper bg-dark p-t-100 p-b-50">
        <div class="wrapper wrapper--w900">
            <div class="card card-6">
                <div class="card-heading">
                    <h2 class="title">Edit Buku {{$post->judul}}</h2>
                </div>
                <div class="card-body">
                    <form action="/content/{{$post->id}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                        <div class="form-row">
                            <div class="name">Judul Buku</div>
                            <div class="value">
                                <input class="input--style-6" type="text" name="judul" id="judul" value="{{old('judul', $post->judul)}}">
                                @error('judul')
                                <div class="alert alert-danger">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Tahun Diterbitkan</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-6" type="text" name="tahun" id="tahun" value="{{old('tahun', $post->tahun)}}">
                                    @error('tahun')
                                    <div class="alert alert-danger">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Penulis</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-6" type="text" name="penulis" id="penulis" value="{{old('penulis', $post->penulis)}}"></textarea>
                                    @error('penulis')
                                    <div class="alert alert-danger">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Penerbit</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-6" type="text" name="penerbit" id="penerbit" value="{{old('penerbit', $post->penerbit)}}"></textarea>
                                    @error('penerbit')
                                    <div class="alert alert-danger">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Genre</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-6" type="text" name="genre" id="genre">
                                    @error('genre')
                                    <div class="alert alert-danger">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Sinopsis</div>
                            <div class="value">
                                <div class="input-group">
                                    <textarea class="textarea--style-6" type="text" name="sinopsis" id="sinopsis" value="{{$post->sinopsis}}"></textarea>
                                    @error('sinopsis')
                                    <div class="alert alert-danger">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group">
						        <b>File Cover</b><br/>
						        <input type="file" name="cover" id="cover" value="{{$post->cover}}">
                                @error('cover')
                                <div class="alert alert-danger">
                                    {{ $message }}
                                </div>
                                @enderror
					        </div>
                        </div>

                        <div class="card-footer">
                            <button class="btn btn--radius-2 btn--blue-2" type="submit" value="Upload">Submit</button>
                        </div>
                    </form>
            </div>
        </div>
    </div>
</div>
    <!-- Jquery JS-->
    <script src="{{asset('/form-buku/vendor/jquery/jquery.min.js')}}"></script>


    <!-- Main JS-->
    <script src="{{asset('/form-buku/js/global.js')}}"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->
