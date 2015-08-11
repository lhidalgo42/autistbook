<?php $user = Auth::user();
$patient = PatientUser::where('users_id',$user->id)->get()->first();
?>
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container" style="padding-top: 15px;">
        <a href="/alerts/{{$patient->patients_id}}" class="col-xs-6" style="text-align: center;">
            <div style="color: white">
                <i class="fa fa-exclamation-triangle fa-3x"></i><br>
                <span>&Uacute;ltimas Alarmas</span>
            </div>
        </a>
        <a href="/charts/{{$patient->patients_id}}/day" class="col-xs-6" style="text-align: center;">
            <div style="color: white">
                <i class="fa fa-line-chart fa-3x"></i><br>
                <span>Gr&aacute;ficos</span>
            </div>
        </a>
    </div>
</nav>