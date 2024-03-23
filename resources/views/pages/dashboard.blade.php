@extends('layouts.app')

@section('content')

@include('components.header')

<div class="container mt-5">
    <div class="row">
        <div class="col-md-8 offset-md-2" style="margin-left: 300px;">
            <div class="jumbotron" style="margin-top: 70px;">
                <h1 class="display-4">Welcome to QuickNotesPro</h1>
                <p class="lead">QuickNotesPro is a user-friendly note-taking application designed to streamline the process of creating, editing, and managing notes. With its intuitive interface and robust features, QuickNotesPro offers users a convenient platform to jot down ideas, reminders, tasks, and any other information they need to keep track of.</p>
                <hr class="my-4">
                <p>Get started today and organize your thoughts effortlessly!</p>
                <a class="btn btn-primary btn-lg" href="{{route('notes.create')}}" role="button">Get Started</a>
            </div>
        </div>
    </div>
</div>

@include('components.left_nav')

@endsection
