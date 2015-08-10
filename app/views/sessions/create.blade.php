<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="icon" type="image/ico" href="/images/favicon.ico" />

    {{HTML::style('packages/bootstrap/dist/css/bootstrap.min.css') }}
    {{HTML::style("packages/font-awesome/css/font-awesome.min.css") }}
    <link rel="stylesheet" type="text/css" href="css/login.css" />

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
    <script type="text/javascript" src="js/login.js"></script>



</head>
<body>
<img src="/img/bg.png" id="bg" alt="">
<div class="container fadeout-2" id="home">
    <div class="row">
        <div class="col-lg-6 col-lg-offset-3" style="text-align: center;padding-bottom: 50px;">
            <img  src="/img/logo.png" style="width: 60%;height: 60%;margin-top: 40%"/>
        </div>
    </div>
</div>
<div class="container fadein-2" id="options" style="display: none;   ">
    <div class="row">
            <div class="col-lg-6 col-lg-offset-3" style="text-align: center;padding-bottom: 50px;">
                <img  src="/img/logo.png" style="width: 60%;height: 60%;margin-top: 40%"/>
                <br>
                <button class="btn btn-lg btn-iniciar-sesion" id="iniciar-sesion">INICIAR SESIÓN</button>
                <br><br>
                <button class="btn btn-lg btn-registrarse" id="registrarse">REGISTRARSE</button>
            </div>
    </div>
</div>
<div class="container" id="options-2" style="display: none;   ">
    <div class="row">
        <div class="col-lg-6 col-lg-offset-3" style="text-align: center;padding-bottom: 50px;">
            <img  src="/img/logo.png" style="width: 60%;height: 60%;margin-top: 40%"/>
                <br>
                {{ Form::open(['route'=> 'sessions.store']) }}
                {{ Form::email('email', Input::old('email'), array('placeholder' => 'Correo','class' => 'form-control input-lg','id' => 'mail','required')) }}
                <br><br>
                {{ Form::password('password',array('placeholder' => 'Contraseña','class' => 'form-control input-lg', 'id' => 'pass' ,'required')) }}
                <br>
                @if(Session::has('error'))
                    <h4 class="text-info">{{Session::get('error')}}</h4>
                @endif
                <br>

                <div >
                    <span class="pull-left">{{ Form::checkbox('remember', true,array('class' => 'form-control input-lg')) }} <span style="color: #FFFFFF;font-size: 18px;">Recordarme</span> </span> <button class="btn btn-lg btn-registrarse pull-right" type="submit">Iniciar</button>
                </div>
                {{ Form::close() }}
        </div>
    </div>
</div>
<script>
    var timer = setTimeout(function(){
        $("#home").css('display','none');
        $("#options").css('display','block');
    },2000);
    $("#iniciar-sesion").click(function(){
        $("#home").removeClass('fadeout-2');
        $("#options").removeClass('fadein-2').addClass('fadeout-1');
        $("#options-2").addClass('fadein-1');
        var timer = setTimeout(function(){
            $("#options").css('display','none');
            $("#options-2").css('display','block');
        },1000);

    });
</script>
@if(Session::has('error'))
    <script>
        $("#home").css('display','none').removeClass('fadeout-2');
        $("#options").css('display','none').removeClass('fadein-2');
        $("#options-2").css('display','block').addClass('fadein-1');
        clearTimeout(timer);
    </script>
@endif
</body>
</html>
