<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Getting Started with Bootstrap</title>
    {!! HTML::style('css/bootstrap.min.css') !!}
    {!! HTML::style('css/styles.css') !!}


</head>
<body>
<div class="navbar navbar-inverse navbar-static-top">
    <div class="container">
        <div class="navbar-brand">
            Tech Site
        </div>
    </div>

</div>

{!! HTML::script('js/jquery-1.11.2.min.js') !!}
{!! HTML::script('js/bootstrap.min.js') !!}

@yield('content')

</body>


</html>
