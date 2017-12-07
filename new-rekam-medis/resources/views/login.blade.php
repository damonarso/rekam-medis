<!doctype html>
<html>

<head>
    <title>Login</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
        <link rel="icon" href="../../favicon.ico">

    <!-- Bootstrap core CSS -->
    <link href="../../public/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="../../public/assets/css/src/averroes.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../../public/assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
        <script src="../../public/assets/js/ie-emulation-modes-warning.js"></script>
        <script src="../../public/assets/js/smoothscroll.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Custom styles for this template -->
    <link href="../../public/css/carousel.css" rel="stylesheet">
</head>

<body>
 	<div class="col-md-12">
            <a href="patients.blade.php"><img src="../../public/img/AVERROES LOGO TEXT.png" width = "150" height = "50"></a>
      </div>
    <div class="login">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        {{ Form::open(array('url' => 'login')) }}
        <h1 style="color:white">Login</h1>

        <p>
            {{ $errors->first('name') }}
            {{ $errors->first('password') }}
        </p>

        <p>
            {{ Form::label('name', 'Username') }}
            {{ Form::text('name', Input::old('name')) }}
        </p>

        <p>
            {{ Form::label('password', 'Password') }}
            {{ Form::password('password') }}
        </p>

        <p> {{ Form::submit('Login') }} </p>
        {{ Form::close() }}       
    </div>
</body>
