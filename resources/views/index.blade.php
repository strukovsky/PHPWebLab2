@extends('layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Articles</h2>
            </div>
        </div>
    </div>

    <table class="table table-bordered">
        <tr>
            <th>Title</th>
            <th>Author</th>
            <th>Code</th>
            <th>Tags</th>
        </tr>
        @foreach ($articles as $article)
            <tr>
                <td>{{ $article->title }}</td>
                <td>{{ $article->author }}</td>
                <td><a href="/posts/{{ $article->code }}">{{ $article->code }}</a></td>
                <td>
                    @foreach($article->tags as $tag)
                        <a href="/posts/?tag={{$tag->name}}">{{$tag->name}}</a> ,
                    @endforeach

                </td>
            </tr>
        @endforeach
    </table>

@endsection