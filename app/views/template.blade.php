<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Bookstore</title>
    {{ HTML::style('assets/bootstrap/css/bootstrap.min.css')}}
</head>
<body>
    <div class="container">
        <nav class="navbar navbar-default" role="navigation">
            <div class="navbar-header">
                <a href="{{ action('BookController@index')}}" class="navbar-brand">My Books</a>
            </div> 
        </nav>
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
        @yield('content')
        
    </div>
</body>
</html>