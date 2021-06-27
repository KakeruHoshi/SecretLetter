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

      @if($letter['is_open'] == 1)
      <a href="{{action([LettersController::class, 'show'], $letter->id)}}">
        <div class="card m-3">
          <div class="card-body">
            <h5 class="card-title">{{$letter->title}}</h5>
            <p class="card-text">{{$letter->content}}</p>
          </div>
        </div>
      </a>
      @endif
      @endforeach
  </div>
  <!-- <div class="row row-cols-2 row-cols-md-3 g-2 g-lg-3">
    @foreach ($letters as $letter)

    @if($letter['is_open'] == 1)
    <a href="{{action([LettersController::class, 'show'], $letter->id)}}">
      <div class="card m-3">
        <div class="card-body">
          <h5 class="letter-title">{{$letter->title}}</h5>
          <p class="letter-text">{{$letter->content}}</p>
        </div>
      </div>
    </a>
    @endif
    @endforeach
  </div> -->
  
</div>

@endsection