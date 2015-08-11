<?php $user = Auth::user();
$patient = PatientUser::where('users_id',$user->id)->get()->first();
?>
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container" style="padding-top: 15px;">
        <a href="/specialists/{{$patient->patients_id}}" class="col-xs-6" style="text-align: center;">
            <div style="color: white">
                <i class="fa fa-plus-square fa-3x"></i><br>
                <span>Especialistas</span>
            </div>
        </a>
        <a href="/file/{{$patient->patients_id}}" class="col-xs-6" style="text-align: center;">
            <div style="color: white">
                <i class="fa fa-file-text-o fa-3x"></i><br>
                <span>Ficha</span>
            </div>
        </a>
    </div>
</nav>