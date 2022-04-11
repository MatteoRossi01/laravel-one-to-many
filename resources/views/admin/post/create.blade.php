@extends('admin.layouts.base')

@section('content')
    <div class="container">
        <h1 class="mb-3">Inserisci un nuovo post</h1>
        <form method="POST" action="{{ route('admin.posts.store') }}">
            @csrf

            <div class="mb-3">
                <label for="title" class="form-label">Titolo</label>
                <input type="text" class="form-control" id="title" name="title" value="{{old('title')}}">
            </div>

            <div class="mb-3">
                <div class="form-floating">
                    <textarea class="form-control" placeholder="Inserisci il post qui" id="content" name="content" cols="50" rows="10">{{old('content')}}</textarea>
                    <label for="content">Post</label>
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Salva</button>
        </form>
    </div>
@endsection  