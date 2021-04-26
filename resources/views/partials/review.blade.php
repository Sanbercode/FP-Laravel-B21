<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Review Buku</title>
    <link rel="stylesheet" href="{{asset('/profile_page/editProfile.css')}}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<div class="wrapper bg-white my-5">
    <h4 class="pb-4 border-bottom">Review Buku</h4>
    <form role="form" action="/contents/{{$buku->id}}" method="POST">
        @csrf
        <div class="py-2">
            <div class="form-group">
                <div class="row py-1">
                    <div class="col">
                        <label for="isi">Isi Review</label>
                        <input name="isi" id="isi" type="text" class="bg-light form-control {{$errors->has('isi') ? 'is-invalid' : ''}}" placeholder="Masukkan Review Di sini">
                        @error('isi')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <div class="row py-1">
                        <div class="col">
                            <label for="rating">Isi Rating</label>
                            <input name="rating" id="rating" type="text" class="bg-light form-control {{$errors->has('rating') ? 'is-invalid' : ''}}" placeholder="Rating antara 1-9">
                            @error('rating')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-success">Submit</button>
                <a href="{{route('contents')}}" class="btn btn-outline-danger">Cancel</a>
            </div>
        </div>
    </form>
</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
