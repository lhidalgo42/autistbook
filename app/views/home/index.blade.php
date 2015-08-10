<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8" />

    <link rel="icon" type="image/ico" href="/img/favicon.ico" />

    {{HTML::style('packages/bootstrap/dist/css/bootstrap.min.css') }}
    {{HTML::style("packages/font-awesome/css/font-awesome.min.css") }}
    {{HTML::style("/css/login.css") }}

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
<![endif]-->

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="/packages/jquery/dist/jquery.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="/packages/bootstrap/dist/js/bootstrap.min.js"></script>



</head>
<body>
<img src="/img/bg.png" id="bg" alt="">
<div class="container" id="options">
<div class="row">
    <div class="col-lg-6 col-lg-offset-3" style="text-align: center;padding-bottom: 50px;">
        <img  src="/img/logo.png" style="width: 60%;height: 60%;margin-top: 40%"/>
        <div>
            <a href="/home" class="btn btn-lg btn-entrar" id="iniciar-sesion">ENTRAR</a>
            <br><br>
            <a class="btn btn-lg btn-otro" id="registrarse">CONECTAR DISPOSITIVO</a>
            <br><br>
            <a class="btn btn-lg btn-otro" id="registrarse">AÑADIR USUARIO</a>
        </div>
    </div>
</div>
</div>
</body>
</html>
