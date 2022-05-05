<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Lesson;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function index()
    {
        return view('dashboard.pages.komentar.index',['comments'=>Comment::with(['lesson','user'])->latest()->get()]);

    }


   public function store(Request $request)
   {
    $validatedData =  $request->validate([
        'body' => 'required',
        'user_id' => 'required',
        'lesson_id' => 'required',   
    ]);

    Comment::create($validatedData);

    // return($request);
    
    return redirect()->back()->with('status', 'Komentar berhasil ditambahkan!');
    }

    public function destroy(Comment $comment)
    {

        Comment::destroy($comment->id);

        return redirect()->back()->with('status', 'Komentar berhasil dihapus!');
    }
}
