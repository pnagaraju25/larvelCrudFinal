

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title') | User Admin</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
    <style>.flash{padding :1em; border:1px dotted blue ;}</style>
</head>
<body>



<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="{{route('books.index')}}" >Library</a>
        </div>



        <div class="nav navbar-nav navbar-right">

            <li><a href="{{route('user.create')}}" >Register</a></li>
            <li><a href="{{route('logout')}}" >Logout</a></li>
        </div>
    </div>
</nav>


@if(  Session::get('message'))
    <div class="'flash">
        {{  Session::get('message')}}

    </div>
@endif


<main>
    <div class="container">
        @yield('content')
    </div>
</main>

</body>
</html