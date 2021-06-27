<?php namespace App\Http\Controllers;

?>
@extends('layouts.app')

@section('title', 'SecletLetter')

@include('layouts.header')

@section('content')

<div class="container">
  <a href="{{ url('/write') }}">{{ __('新規作成') }}</a>

  <!-- 手紙一覧 -->
  <div class="row row-cols-4 row-cols-md-3 g-4 g-lg-3">
    @foreach ($letters as $letter)

    @if($letter['is_open'] == 1)
    <a href="{{action([LettersController::class, 'show'], $letter->id)}}">
      <div class="card m-3">
        <!-- <svg class="bd-placeholder-img card-img-top" width="100%" height="180" xmlns="http://www.w3.org/2000/svg"
          preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Image cap">
          <title>Placeholder</title>
          <rect fill="#868e96" width="100%" height="100%" /><text fill="#dee2e6" dy=".3em" x="50%" y="50%">Image
            cap</text>
        </svg> -->
        <div class="card-body">
          <h5 class="letter-title">{{$letter->title}}</h5>
          <p class="letter-text">{{$letter->content}}</p>
        </div>
      </div>
    </a>
    @endif
    @endforeach
  </div>
  
</div>

@endsection