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
        <title>ProgQuest - @yield('title')</title>
    </head>
    <body>

    	<nav class="navbar navbar-default">
		  <div class="container-fluid">
		    <div class="navbar-header">
		      <a class="navbar-brand" href="#">
		        <img class="img-responsive" style="width: 25%" alt="Brand" src="{{ URL::asset('img/logo.png') }}">
		      </a>
		    </div>
		  </div>
		</nav>

       <div class="container">
    		@yield('content')
       </div>
    </body>
</html>