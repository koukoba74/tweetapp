@extends('layouts.posting')

@section('title', '投稿詳細')

@section('content')
<div class="container-fluid">
    @if (session('flash_message'))
        <p>{{ session('flash_message') }}</p>
    @endif
    <a class="btn btn-primary mb-2" href="{{route('posts.index')}}" role="button">戻る</a>
    <div class="card">
        <div class="card-body shadow-sm">
            <h2 class="card-title fs-5">{{ $post->title }}</h2>
            <p class="card-text">{{ $post->content }}</p>
            <div class="d-flex edit-btn">
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
</div>
@endsection