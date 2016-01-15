<html xmlns='http://www.w3.org/1999/xhtml' xml:lang='lt'>
<HEAD>
    <TITLE>&#169;valdyk.net</TITLE>
    <meta http-equiv='Content-Type' content='text/html; charset=UTF-8'/>
    <link rel="shortcut icon" href="{!! asset('favicon.ico') !!}" type="image/x-icon"/>
    {!! Html::style('css/stilius.css') !!}
    {!! Html::style('css/bootstrap.min.css') !!}

    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
</head>
<body>
@section('sidebar')

@show

<div class="container">
    @yield('content')
</div>
</body>
</html>
