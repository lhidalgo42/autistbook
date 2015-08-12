<?php $user = Auth::user();
$patient = PatientUser::where('users_id',$user->id)->get()->first();
?>
<nav class="navbar navbar-inverse navbar-fixed-bottom">
    <div class="container" style="padding-top: 15px;">
        <a href="/home/{{$patient->patients_id}}" class="col-xs-4" style="text-align: center;">
            <div style="color: white">
                <img src="/icon/inicio-01.png" style="width: 25%;height: 25%;"><br>
                <span>Inicio</span>
            </div>
        </a>
        <a href="/alerts/{{$patient->patients_id}}" class="col-xs-4" style="text-align: center;">
            <div style="color: white">
                <img src="/icon/alertas-01.png" style="width: 25%;height: 25%;"><br>
                <span>Alertas</span>
            </div>
        </a>
        <a href="/dictionary" class="col-xs-4" style="text-align: center;">
            <div style="color: white">
                <img src="/icon/diccionario-01.png" style="width: 25%;height: 25%;"><br>
                <span>Diccionario</span>
            </div>
        </a>
    </div>
</nav>