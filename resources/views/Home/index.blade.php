@extends('Home.layout')
    @section('title', '文章列表')
    @section('content')
        @foreach($articles as $article)
        <a class="item" href="/detail/{{ $article->id }}">
            <img src="{{ $article->attach }}" alt=""/>
            <div class="info">
                <h3>{{ $article->title }}</h3>
                <p>发表于{{ $article->createTime }}</p>
                <p>{!!str_limit($article->content,250,'...')!!}</p>
            </div>
        </a>
        @endforeach
        <div class="page">
            <span class="fl">
                共{{$articles->total()}}条,
                每页显示{{$articles->count()}}条,
                当前第{{$articles->currentPage()}}页
            </span>
            {{$articles->render()}}
        </div>
    @stop