@extends('template')
@section('content')
    <div class="page-header">
        <h1>I wanna read it!</h1>
    </div>
    
    <form action="{{ action('BookController@manageCreateBook') }}" method="post" role="form">
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" name="title" id="title">
        </div>

        <div class="form-group">
            <label for="author">Author</label>
            <input type="text" class="form-control" name="author" id="author">
        </div>

        <div class="checkbox">
            <label for="available">
                <input type="checkbox" name="available" id="available"> Available
            </label>
        </div>

        <input type="submit" value="Add" class="btn btn-primary">
        <a href="{{ action('BookController@index')}}" class="btn btn-default">Go back!</a>
    </form>
@stop