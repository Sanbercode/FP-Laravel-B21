<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Auth;
use App\Buku;

class PostController extends Controller
{
    public function create () {
        return view('partials.formbuku');
    }

    public function store(Request $request) {
        $this->validate($request, [
           'judul' => 'required',
           'tahun' => 'required',
           'penulis' => 'required',
           'penerbit' => 'required',
           'sinopsis' => 'required',
           'cover' => 'required'
        ]);

        $query = Buku::create([
            "judul"=> $request["judul"],
            "tahun"=> $request["tahun"],
            "penulis"=> $request["penulis"],
            "penerbit"=> $request["penerbit"],
            "sinopsis"=> $request["sinopsis"],
            "cover"=> $request["cover"],
            "user_id"=> Auth::id()
        ]);
        return redirect('/contents');
    }

    public function index() {
//        $posts = DB::table('buku')->get();
        $posts = Buku::all();

        return view('partials.content', compact('posts'));
    }

    public function show($id){
        $post = DB::table('buku')->where('id', $id)->first();
        return view('partials.show', compact('post'));
    }

    public function edit($id){
        $post = DB::table('buku')->where('id', $id)->first();

        return view('partials.edit', compact('post'));
    }

    public function update($id, Request $request){
        $query = DB::table('buku')
                ->where('id', $id)
                ->update([
                    'judul' => $request['judul'],
                    'tahun' => $request['tahun'],
                    'penulis' => $request['penulis'],
                    'penerbit' => $request['penerbit'],
                    'sinopsis' => $request['sinopsis'],
                    'cover' => $request['cover'],
                ]);
        return redirect('/home/content')->with('success', 'Berhasil update buku');
    }

    public function destroy($id){
        $query = DB::table('buku')->where('id', $id)->delete();
        return redirect('/home/content')->with('success', 'Post berhasil di delete');
    }
}
