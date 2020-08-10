<?php

namespace App\Http\Controllers;

use App\Tweet;
use Illuminate\Http\Request;

class TweetController extends Controller
{
    public function index()
    {
        $tweet = auth()->user()->timeline();
        return view('tweets.index', [
            'tweets' => $tweet
        ]);
    }

    public function store()
    {
        $attributes = request()->validate(['body' => 'required|max:255']);
        Tweet::create([
            'user_id' => auth()->id(),
            'body' => $attributes['body']
        ]);
        return redirect('/tweets.index');
    }
}
