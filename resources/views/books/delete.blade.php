@extends('layouts.master')

@section('title')
    Add a book
@endsection

@section('content')
    <h1>Delete {{$book->title}}</h1>

    <form method='POST' action='/books/{{ $book->id }}'>
        <div class='details'>* Required fields</div>
        {{ method_field('delete') }}
        {{ csrf_field() }}

        <p>Are you sure you want to delete:</p>

        <label for='title'>* Title</label>
        <input type='text' name='title' id='title' value='{{$book->title}}'>
        @include('modules.field-error',['field'=>'title'])

        <label for='author_id'>* Author</label>
        <input type='text' name='author' id='author' value='{{$book->author}}'>
        @include('modules.field-error',['field'=>'author'])

        <label for='published_year'>* Published Year (YYYY)</label>
        <input type='text' name='published_year' id='published_year' value='{{$book->published_year}}'>
        @include('modules.field-error',['field'=>'published_year'])

        <label for='cover_url'>* Cover URL</label>
        <input type='text' name='cover_url' id='cover_url' value='{{$book->cover_url}}'>
        @include('modules.field-error',['field'=>'cover_url'])

        <label for=' purchase_url'>* Purchase URL </label>
        <input type='text' name='purchase_url' id='purchase_url' value='{{$book->purchase_url}}'>
        @include('modules.field-error',['field'=>'purchase_url'])

        <input type='submit' value='Delete this book'>

    </form>
    @if($errors->any())
        <ul class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif
@endsection
