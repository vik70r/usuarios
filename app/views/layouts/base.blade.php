<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="caisc">
    <link rel="shortcut icon" href="favicon.ico">
    <title>Usuarios</title>
    {{ HTML::style('css/bootstrap.min.css') }}
    {{ HTML::style('css/bootstrap-theme.min.css') }}
    {{ HTML::style('css/jumbotron-narrow.css') }}

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
    <div class="container">
      <div class="header">
        <ul class="nav nav-pills pull-right">
          <li>{{ HTML::link('/','Inicio') }}</li>
          <li>{{ HTML::link('usuarios','Usuarios') }}</li>
        </ul>
        <h3 class="text-muted">UUUsuarios</h3>
      </div>
        @section('sidebar')
        
        @show
        @yield('content')
        <br>
      <div class="footer">
        <p>&copy; Ing. Software - UNSAAC | 2014</p>
      </div>
    </div> <!-- /container -->
    {{ HTML::script('js/jquery-2.min.js') }}
    {{ HTML::script('js/bootstrap.min.js') }}
  </body>
</html>