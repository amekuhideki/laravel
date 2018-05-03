@extends('layouts.admin')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">記事詳細</div>
                <div class="panel-body">
                    <div>
                        <h1>タイトル:{{ $post->title }}</h1>
                        <h3>カテゴリ:{{ $post->category->title }}</h3>
                        <p>{{ $post->body }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
