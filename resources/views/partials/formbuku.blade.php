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
                    <h2 class="title">Input Buku</h2>
                </div>
                <div class="card-body">
                    <form action="{{route('storeBuku')}}" method="POST">
                        @csrf
                        <div class="form-row">
                            <div class="name">Judul Buku</div>
                            <div class="value">
                                <input class="input--style-6" type="text" name="judul" id="judul">
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
                                    <input class="input--style-6" type="text" name="tahun" id="tahun">
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
                                    <input class="input--style-6" type="text" name="penulis" id="penulis">
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
                                    <input class="input--style-6" type="text" name="penerbit" id="penerbit">
                                    @error('penerbit')
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
                                    <textarea class="textarea--style-6" type="text" name="sinopsis" id="sinopsis"></textarea>
                                    @error('sinopsis')
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
                                    <textarea class="textarea--style-6" type="text" name="genre" id="genre" placeholder="Pisahkan dengan koma (,)"></textarea>
                                    @error('genre')
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
                                <input type="file" name="cover" id="cover">
                                    @error('cover')
                                    <div class="alert alert-danger">
                                        {{ $message }}
                                    </div>
                                    @enderror
					        </div>
                                <!-- <div class="name">Upload Cover Buku</div>
                                <div class="value">
                                    <div class="input-group js-input-file">
                                        <input class="input-file" type="file" name="cover" id="file">
                                        <label class="label--file" type="file" for="file">Choose file</label>
                                        <span class="input-file__info">No file chosen</span>
                                    </div>
                                    <div class="label--desc">Upload Book Cover or any other relevant file. Max file size 50 MB</div>
                                </div> -->
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
