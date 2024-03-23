@extends('layouts.app')

@section('content')

@include('components.header')

<div class="container mt-4 mb-5">
    <div class="row">
        <div class="col-md-8 offset-md-2" style="margin-top: 100px; margin-left: 300px;">
            <div class="card">
                <div class="card-header">
                    @if(isset($seo))
                    <title>{{ $seo->title }}</title>
                    @endif
                    <h5 class="mb-0">My Notes</h5>
                </div>
                <div class="card-body">
                    <form action="{{ route('notes.search') }}" method="GET" class="mb-4">
                        <div class="input-group">
                            <input type="text" name="query" class="form-control" placeholder="Search notes by title or content">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="submit">Search</button>
                            </div>
                        </div>
                    </form>

                    @foreach($notes as $note)
                    <div class="card mb-3">
                        <div class="card-body">
                            <h5 class="card-title">{{ $note->title }}</h5>
                            <p class="card-text">{{ $note->content }}</p>
                            <p class="card-text"><small class="text-muted">Created at: {{ $note->created_at }}</small></p>
                            <a href="{{ route('notes.edit', $note->id) }}" class="btn btn-primary">Edit</a>
                            <form action="{{ route('notes.destroy', $note->id) }}" method="POST" style="display: inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

@include('components.left_nav')

@endsection