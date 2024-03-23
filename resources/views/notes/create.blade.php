@extends('layouts.app')

@section('content')

@include('components.header')

<div class="container mt-4">
    <div class="row">
        <div class="col-md-8 offset-md-2" style="margin-left: 300px;">
            <div class="card" style="margin-top: 150px;">
                <div class="card-header">
                    <h5 class="mb-0" style="text-align: center;">Add New Note</h5>
                </div>
                <div class="card-body">
                    <form action="{{ route('notes.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" class="form-control" name="title" id="title" placeholder="Enter title">
                        </div>
                        <div class="form-group">
                            <label for="content">Content</label>
                            <textarea class="form-control" name="content" id="content" placeholder="Enter content"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@include('components.left_nav')

@endsection