@extends('layouts.app')

@section('title', 'SecletLetter')

@include('layouts.header')

@section('content')
<h2>新規作成</h2>

<a href="{{ url('/') }}">{{ __('一覧へ戻る') }}</a>
<form method="POST" action="{{ url('/store/') }}">
    @csrf

    <div>
        <label for="form-name">タイトル</label>
        <input type="text" name="title" id="form-name" required>
    </div>

    <div>
        <label for="form-tel">手紙の内容</label><br>
        <textarea name="content" cols="50" rows="5"></textarea>
    </div>

    <div>
        <input type="radio" id="open" name="is_open" value="1" checked>
        <label for="open">公開</label>
    </div>

    <div>
        <input type="radio" id="close" name="is_open" value="0">
        <label for="close">非公開</label>
    </div>
    <button type="submit">登録</button>

</form>
@endsection