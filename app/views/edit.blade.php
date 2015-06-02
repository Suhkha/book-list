@extends('template')
@section('content')
    <div class="page-header">
        <h1>Edit book <small>Come on and complete it</small></h1>
    </div>
    <form action="{{ action('BookController@manageEditBook')}}" method="post" role="form">
        <input type="hidden" name="id" value="{{ $book->id }}">

        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" name="title" value="{{ $book->title }}">
        </div>

        <div class="form-group">
            <label for="title">Author</label>
            <input type="text" class="form-control" name="author" value="{{ $book->author }}">
        </div>

        <div class="form-group">
            <label for="title">
            <input type="checkbox" name="available" {{ $book->available ? 'checked': '' }}>Available</label>
        </div>

        <input type="submit" value="Update" class="btn btn-primary" >
        <a href="{{ action('BookController@index')}}" class="btn btn-default">Go back!</a>
        
    </form>
@stop