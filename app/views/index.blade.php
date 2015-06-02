@extends('template')
@section('content')
    <div class="page-header">
        <h1>¡You can read it!</h1>
    </div>

    <div class="panel panel-default">
        <div class="panel-body">
            <a href="{{ action('BookController@create') }}" class="btn btn-primary">Add new book</a>
        </div>
    </div>

    @if($books->isEmpty())
        <p>There's no books here...</p>
    @else 
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Author</th>
                    <th>Available</th>
                    <th>Options</th>
                </tr>
            </thead>
            <tbody>
                @foreach($books as $book)
                <tr>
                    <td>{{ $book->title }}</td>
                    <td>{{ $book->author }}</td>
                    <td>{{ $book->available ? 'Yes' : 'No' }}</td>
                    <td>
                        <a href="{{ action('BookController@edit', $book->id) }}" class="btn btn-default">Edit</a>
                        <a href="{{ action('BookController@delete', $book->id) }}" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @endif
@stop