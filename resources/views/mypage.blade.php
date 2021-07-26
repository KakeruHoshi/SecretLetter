<?php namespace App\Http\Controllers;

?>
@extends('layouts.app')

@section('title', 'SecletLetter')

@include('layouts.header')

@section('content')

<div class="container">
  <a href="{{ url('/write') }}">{{ __('新規作成') }}</a>

  <!-- 手紙一覧 -->
  <div class="card-columns">
      @foreach ($letters as $letter)

      @if($letter['user_id'] == $user_id)
      <a href="{{action([LettersController::class, 'show'], $letter->id)}}">
        <div class="card m-3">
          <div class="card-body">
            <h5 class="card-title">{{$letter->title}}</h5>
            <p class="card-text">{{$letter->content}}</p>
          </div>
        </div>
      </a>
      <button href="{{action([LettersController::class, 'open'], $letter->id)}}">やっぱり送る</button>
      @endif
      @endforeach
  </div>
  
</div>

@endsection