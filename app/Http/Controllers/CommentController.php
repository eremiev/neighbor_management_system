<?php

namespace App\Http\Controllers;

use App\Message;
use App\Http\Requests\CommentRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comments = Message::orderBy('created_at', 'desc')->paginate(5);
        return view('messages', compact('comments'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  CommentRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(CommentRequest $request)
    {
        $inputs = $request->only('message');
        $inputs['user_id'] = Auth::id();
        Message::create($inputs);
        return Redirect::route('comments.index');
    }
}
