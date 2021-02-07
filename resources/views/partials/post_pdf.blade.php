<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style type="text/css">
        table tr td,
        table tr th{
            font-size: 9pt;
        }
        table, th, td {
            border: 1px solid black;
        }
    </style>
</head>
<body>
<div class="container">
    <table class='table' style="width: 100%;">
        <thead>
        <tr>
            <th>No</th>
            <th>Judul</th>
            <th>Tahun</th>
            <th>Penulis</th>
            <th>Penerbit</th>
            <th>Genre</th>

        </tr>
        </thead>
        <tbody>
        @php $i=1 @endphp
            <tr>
                <td>{{$i++ }}</td>
                <td>{{$post->judul}}</td>
                <td>{{$post->tahun}}</td>
                <td>{{$post->penulis}}</td>
                <td>{{$post->penerbit}}</td>
                <td>
                    @forelse($post->genre as $g)
                        {{$g['nama']}},
                    @empty
                        No Data
                    @endforelse
                </td>

            </tr>
        </tbody>
    </table>
    <hr>
    <table class="table">
        <thead>
        <tr>
            <th>Sinopsis</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>{{$post->sinopsis}}</td>
        </tr>
        </tbody>
    </table>

</div>
{{--Genre :--}}
{{--@forelse($post->genre as $Genre)--}}
{{--    <button class="btn btn-warning btn-sm">{{$Genre['nama']}}</button>--}}

{{--@empty--}}
{{--    No Data--}}
{{--@endforelse--}}
</body>
</html>
