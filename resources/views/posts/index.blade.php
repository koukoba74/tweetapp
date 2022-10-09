@extends('layouts.posting')

@section('title', '投稿一覧')

@section('content')
<div class="container-fluid">
    @if (session('flash_message'))
        <p class="text-success">{{ session('flash_message') }}</p>
    @endif
    <a class="btn btn-primary mb-3" href="{{route('posts.create')}}" role="button">つぶやいてみる</a>
    @foreach($posts as $post)
        <div class="card mb-3">
            <div class="card-body shadow-sm">
                <h2 class="card-title fs-5">{{ $post->title }}</h2>
                <p class="card-text">{{ $post->content }}</p>
                <div class="d-flex edit-btn">
                    <a class="btn btn-outline-primary btn-sm me-1" href="{{ route('posts.show', $post) }}">詳細</a>
                    <a class="btn btn-outline-primary btn-sm me-1" href="{{ route('posts.edit', $post) }}" role="button">編集</a>
                    <form action="{{ route('posts.destroy', $post)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-outline-danger btn-sm">
                            削除
                        </button>
                    </form>
                </div>
            </div>
        </div>
    @endforeach
</div>
@endsection
