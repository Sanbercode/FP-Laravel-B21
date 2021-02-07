<?php

namespace App\Http\Controllers;

use App\Review;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Auth;
use App\Buku;
use App\Genre;
use RealRashid\SweetAlert\Facades\Alert;

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
           'genre' => 'required',
           'cover' => 'required'
        ]);

        $arrayGenre = explode(',', $request->genre);
        $genre_id = [];
        foreach($arrayGenre as $genre_name){
            $genre = Genre::firstOrCreate(["nama" => $genre_name]);
            $genre_id[] = $genre->id;
        }
        $user = Auth::user();

        $query = $user->buku()->create([
            "judul"=> $request["judul"],
            "tahun"=> $request["tahun"],
            "penulis"=> $request["penulis"],
            "penerbit"=> $request["penerbit"],
            "sinopsis"=> $request["sinopsis"],
            "cover"=> $request["cover"]
        ]);
        $query->genre()->sync($genre_id);
        return redirect('/contents')->withStoreMessage('Berhasil Menambahkan Buku!');
    }

    public function index() {
        if(session('store_message')){
            Alert::success('Success', session('store_message'));
        }
        $posts = Buku::all();

        return view('partials.content', compact('posts'));
    }

    public function index_author(){
        if(session('edit_message')){
            Alert::success('Success', session('edit_message'));
        } else if(session('delete_message')){
            Alert::success('Success', session('delete_message'));
        }
        $posts = Auth::user()->buku;
        return view('partials.content_author', compact('posts'));
    }

    public function show($id){
        if(session('store_message')){
            Alert::success('Success', session('store_message'));
        }
        $post = Buku::find($id);
        $review = Review::where('buku_id', $post->id)->get();

        return view('partials.show', compact('post', 'review'));
    }

    public function edit($id){
        $post = Buku::find($id);

        return view('partials.edit', compact('post'));
    }

    public function update($id, Request $request){
        $this->validate($request, [
            'judul' => 'required',
            'tahun' => 'required',
            'penulis' => 'required',
            'penerbit' => 'required',
            'sinopsis' => 'required',
            'genre' => 'required',
            'cover' => 'required'
        ]);

//        $query = DB::table('buku')
//                ->where('id', $id)
//                ->update([
//                    'judul' => $request['judul'],
//                    'tahun' => $request['tahun'],
//                    'penulis' => $request['penulis'],
//                    'penerbit' => $request['penerbit'],
//                    'sinopsis' => $request['sinopsis'],
//                    'cover' => $request['cover'],
//                ]);

        $arrayGenre = explode(',', $request->genre);
        $genre_id = [];
        foreach($arrayGenre as $genre_name){
            $genre = Genre::firstOrCreate(["nama" => $genre_name]);
            $genre_id[] = $genre->id;
        }

        $query = Buku::find($id);
        $query->judul = $request['judul'];
        $query->tahun = $request['tahun'];
        $query->penulis = $request['penulis'];
        $query->penerbit = $request['penerbit'];
        $query->sinopsis = $request['sinopsis'];
        $query->cover = $request['cover'];
        $query->update();

        $query->genre()->sync($genre_id);

        return redirect('/contents/author')->withEditMessage('Berhasil mengedit buku!');
    }

    public function destroy($id){
        $query = Buku::find($id)->delete();
        return redirect('/contents/author')->withDeleteMessage('Buku berhasil dihapus');
    }
}
