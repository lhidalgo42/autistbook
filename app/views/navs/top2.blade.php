<?php $user = Auth::user();
$patient = PatientUser::where('users_id',$user->id)->get()->first();
?>
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container" style="padding-top: 15px;">
        <a href="/alerts/{{$patient->patients_id}}" class="col-xs-6" style="text-align: center;">
            <div style="color: white">
                <img src="/icon/alertas-01.png" style="width: 15%;height: 15%;"><br>
                <span>&Uacute;ltimas Alarmas</span>
            </div>
        </a>
        <a href="/charts/{{$patient->patients_id}}/day" class="col-xs-6" style="text-align: center;">
            <div style="color: white">
                <img src="/icon/graficos-01.png" style="width: 20%;height: 20%;"><br>
                <span>Gr&aacute;ficos</span>
            </div>
        </a>
    </div>
</nav>