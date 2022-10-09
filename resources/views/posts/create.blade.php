@extends('layouts.posting')

@section('title', '新規投稿')

@section('content')
<div class="container-fluid">
    @if ($errors->any())
        <div class="alert alert-warning alert-dismissible">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <a class="btn btn-primary mb-3" href="{{route('posts.index')}}" role="button">戻る</a>
    <div class="card">
        <form action="{{route('posts.store')}}" method="post" class="mb-0">
            @csrf
            <div class="card-body">
                <div class="form-group mb-3">
                    <label for="title">タイトル</label>
                    <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}"
                        placeholder="タイトル" />
                </div>
                <div class="form-group mb-3">
                    <label for="content">本文</label>
                    <textarea type="text" class="form-control" id="content" name="content"
                        placeholder="本文">{{ old('content') }}</textarea>
                </div>
                <div class="text-end">
                    <button type="submit" class="btn btn-primary">つぶやく！</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection