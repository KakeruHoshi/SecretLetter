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

        $letter->save();

        return redirect('/');
    }
}
