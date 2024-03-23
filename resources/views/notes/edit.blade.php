@extends('layouts.app')

@section('content')

@include('components.header')

<div class="container fluid mt-4 mb-5">
    <div class="row">
        <div class="col-md-8 offset-md-2" style="margin-left: 300px;">
            <div class="card" style="margin-top: 100px;">
                <div class="card-header">
                    <h5 class="mb-0" style="text-align: center;">Edit Note</h5>
                </div>
                <div class="card-body">
                    <form action="{{ route('notes.update', $note->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" class="form-control" name="title" id="title" value="{{ $note->title }}">
                        </div>
                        <div class="form-group">
                            <label for="content">Content</label>
                            <textarea class="form-control" name="content" id="content" rows="5">{{ $note->content }}</textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@include('components.left_nav')

@endsection
