<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Profile</title>
    <link rel="stylesheet" href="{{asset('/profile_page/editProfile.css')}}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<div class="wrapper bg-white mt-sm-5">
    <h4 class="pb-4 border-bottom">Create Profile</h4>
    <form role="form" action="/profile" method="POST">
        @csrf
        <div class="py-2">
            <div class="form-group">
                <div class="row py-1">
                    <div class="col">
                        <label for="name">Full Name</label>
                        <input name="name" id="name" type="text" class="bg-light form-control {{$errors->has('name') ? 'is-invalid' : ''}}" placeholder="John Cartridge">
                        @error('name')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="row py-1">
                    <div class="col">
                        <label for="umur">Age</label>
                        <input name="umur" id="umur" type="text" class="bg-light form-control {{$errors->has('umur') ? 'is-invalid' : ''}}" placeholder="Put Your Age Here">
                        @error('umur')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="row py-1">
                    <div class="col">
                        <label for="address">Address</label>
                        <input name="address" id="address" type="text" class="bg-light form-control {{$errors->has('address') ? 'is-invalid' : ''}}" placeholder="Put Your Adress Here">
                        @error('address')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="row pt-1 pb-4">
                    <div class="col">
                        <label for="job">Job</label>
                        <input name="job" id="job" type="text" class="bg-light form-control {{$errors->has('job') ? 'is-invalid' : ''}}" placeholder="Current Job">
                        @error('job')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Create</button>

        </div>
    </form>

</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
