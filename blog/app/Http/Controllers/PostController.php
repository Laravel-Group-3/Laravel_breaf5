<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use App\Models\ReviewRating;
use Session;

class PostController extends Controller
{
    public function view($id){
        $post_detail = Comment::with('ReviewData')->find($id);
        return view('home.farm-details',compact('farm-detail'));
    }

    public function reviewstore(Request $request){
        $review = new ReviewRating();
        $review->farm_id = $request->farm_id;
        $review->post_id = $request->post_id;
        $review->name    = $request->name;
        $review->email   = $request->email;
        $review->comments= $request->comment;
        $review->star_rating = $request->rating;
        $review->save();
        return redirect()->back()->with('flash_msg_success','Your review has been submitted Successfully,');
    }
}
