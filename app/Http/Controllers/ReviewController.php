<?php

namespace App\Http\Controllers;

use App\Buku;
use Illuminate\Http\Request;
use App\Review;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class ReviewController extends Controller
{
    public function reviewAuthor(){
        if(session('edit_message')){
            Alert::success('Success', session('edit_message'));
        } else if (session('destroy_message')){
            Alert::success('Success', session('edit_message'));
        }
        $authorReview = Auth::user()->review;
        return view('partials.review_author', compact('authorReview'));
    }
    public function getReviewPage($id){
        $buku = Buku::find($id);
        return view('partials.review', compact('buku'));
    }

    public function storeReview(Request $request, $id){
        $this->validate($request, [
            'rating' => 'required|max:1',
            'isi' => 'required|min:100'
        ]);
        $buku = Buku :: find($id);

        $query = Review::create([
            'rating' => $request->rating,
            'isi' => $request->isi,
            'user_id' => Auth::id(),
            'buku_id' => $buku->id
        ]);

        return redirect('/contents/'. $buku->id)->withStoreMessage('Berhasil menambahkan review!');
    }

    public function getEditReviewPage($id){
        $review = Review::find($id);

        return view('partials.editReview', compact('review'));
    }

    public function updateReview(Request $request, $id){
        $this->validate($request, [
           'rating' => 'required|max:1',
           'isi' => 'required|min:100'
        ]);

        $review = Review::find($id);
        $review->isi = $request->isi;
        $review->rating = $request->rating;
        $review->update();

        return redirect('/reviewAuthor')->withEditMessage('Review berhasil disunting!');
    }

    public function destroyReview($id){
        $query = Review::find($id)->delete();
        return redirect('/reviewAuthor')->withDestroyMessage('Review berhasil dihapus!');
    }
}
