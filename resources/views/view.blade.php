@extends('layouts.app')

@section('title', $letter->title . ' - Blog')

@include('layouts.header')

@section('content')
<h2>{{$letter->title}}</h2>
<article>
    {{$letter->content}}
</article>
@endsection