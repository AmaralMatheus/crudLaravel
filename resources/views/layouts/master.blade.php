<!DOCTYPE html>
<html>
    <head>
    	<meta name="_token" content="{{  csrf_token() }}" />
    	<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/bootstrap.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/bootstrap-theme.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/dataTable.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/main.css') }}">
        <script type="text/javascript" src="{{ URL::asset('js/jquery.min.js') }}"></script>
        <script type="text/javascript" src="{{ URL::asset('js/jquery.mask.min.js') }}"></script>
        <script type="text/javascript" src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
        <script type="text/javascript" src="{{ URL::asset('js/dataTable.min.js') }}"></script>
        <script type="text/javascript" src="{{ URL::asset('js/main.js') }}"></script>
        <script type="text/javascript" src="{{ URL::asset('js/MoneyMask.min.js') }}"></script>
        <title>Laravel CRUD</title>
    </head>
    <body>

    	<nav class="navbar navbar-default" style="margin: 0;">
          <div class="container">
            <div class="navbar-header" align="left">
                <a href="/crudLaravel/public/"><img class="img-responsive" width="100" style="line-height: 2;border:none;padding-top: 7.5px;" alt="Brand" src="{{ URL::asset('img/logo.png') }}"></a>
            </div>
            <ul class="nav navbar-nav navbar-right" align="center">
                <li><a href="/crudLaravel/public/" style="line-height: 2.3">SIGNOUT</a></li>
            </ul>
          </div>
        </nav>

       <div class="container" style="padding-top: 20px;">
    		@yield('content')
       </div>
    </body>
</html>