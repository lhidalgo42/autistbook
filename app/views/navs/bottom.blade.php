<?php $user = Auth::user();
$patient = PatientUser::where('users_id',$user->id)->get()->first();
?>
<nav class="navbar navbar-inverse navbar-fixed-bottom">
    <div class="container" style="padding-top: 15px;">
        <a href="/home/{{$patient->patients_id}}" class="col-xs-4" style="text-align: center;">
            <div style="color: white">
                <i class="fa fa-home fa-3x"></i><br>
                <span>Inicio</span>
            </div>
        </a>
        <a href="/alerts/{{$patient->patients_id}}" class="col-xs-4" style="text-align: center;">
            <div style="color: white">
                <i class="fa fa-exclamation-triangle fa-3x"></i><br>
                <span>Alertas</span>
            </div>
        </a>
        <a href="/dictionary/{{$patient->patients_id}}" class="col-xs-4" style="text-align: center;">
            <div style="color: white">
                <i class="fa fa-book fa-3x"></i><br>
                <span>Diccionario</span>
            </div>
        </a>
    </div>
</nav>