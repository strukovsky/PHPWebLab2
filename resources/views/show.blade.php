@extends('layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>{{ $article->title }}</h2>
                <h4>by {{$article->author}}</h4>
                <h4>Tags</h4>
                <ul>
                            @foreach($article->tags as $tag)
                        <li> {{  $tag->name}},</li>
                            @endforeach
                </ul>
            </div>
        </div>
    </div>

    <div class="container">
        {{$article->contents}}
    </div>

@endsection