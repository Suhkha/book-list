@extends('template')
@section('content')
    <div class="page-header">
        <h1>Delete {{ $book->title }} <small>Are you sure?</small></h1>
    </div>

    <form action="{{ action('BookController@manageDeleteBook') }}" method="post" role="form">
        <input type="hidden" name="book" value="{{ $book->id }}">
        <input type="submit" class="btn btn-danger" value="Yes, of course.">
        <a href="{{ action('BookController@index')}}" class="btn btn-default">Go back!</a>
    </form>
@stop