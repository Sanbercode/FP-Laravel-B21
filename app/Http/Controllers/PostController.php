<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class PostController extends Controller
{
    public function create () {
        return view('partials.formbuku');
    }

    public function store(Request $request) {
        
        $query = DB::table('buku')->insert([
            "judul"=> $request["judul"],
            "tahun"=> $request["tahun"],
            "penulis"=>$request["penulis"],
            "penerbit"=>$request["penerbit"],
            "sinopsis"=>$request["sinopsis"],
            "cover"=>$request["cover"]
        ]);

        return redirect('/home/content');
    }

    public function index() {
        $posts = DB::table('buku')->get();

        return view('partials.content', compact('posts'));
    }

    public function show($id){
        $post = DB::table('buku')->where('id', $id)->first();
        return view('partials.show', compact('post'));
    }
}
