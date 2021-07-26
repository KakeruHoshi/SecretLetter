<?php

namespace App\Http\Controllers;

use App\Models\Letter;
use Illuminate\Http\Request;

class LettersController extends Controller
{
    //
    public function index()
    {
        $letters = Letter::all()->reverse();

        return view('letters', ['letters'=>$letters]);
    }

    public function show($id)
    {
        $letter = Letter::findOrFail($id);

        return view('view', ['letter'=>$letter]);
    }

    public function create()
    {
        return view('write');
    }

    public function store(Request $request)
    {
        $letter = new Letter;

        $letter->title = $request->input('title');
        $letter->content = $request->input('content');
        $letter->is_open = $request->input('is_open');
        $letter->user_id = $request->user()->id;

        $letter->save();

        return redirect('/');
    }

    public function mypage()
    {
        $user_id = auth()->id();
        $letters = Letter::all()->reverse();
        // $letters = Letter::where(['user_id', (int)$id], ['user_id', (string)$id]);
        return view('mypage', ['letters'=>$letters, 'user_id'=>$user_id]);
    }

    public function open($id)
    {
        dd();
        $letter = Letter::findOrFail($id);
        $letter->is_open = 1;

        $letter->save();

        return redirect('/mypage');
    }
}
