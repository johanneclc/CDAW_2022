<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Media;
use App\Models\Jaime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->only(['store', 'destroy']);
    } 

    public function store(Request $request, $movie)
    {
        $request->validate(['comment' => 'required']);

        Comment::create([
            'user_id' => Auth::user()->id,
            'id_media' => $movie,
            'content' => $request->comment
            
        ]);
        return back();
    }

    public function destroy(Comment $comment)
    {
        if ($comment->user->id !== Auth::user()->id) {
            abort(403);
        }
        $comment->delete();
        return back();
    }

    public function addLike(Request $req){    
        $idf = $req->input('id');
        $c=0;
        $data=[
            'id_media'=>$idf,
            'user_id'=>Auth::user()->id
            
        ];
       
      
        Jaime::create($data);
         return redirect("films/".$idf);
    }
}