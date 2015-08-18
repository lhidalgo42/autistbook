<?php $user = Auth::user();
$patient = PatientUser::where('users_id',$user->id)->get()->first();
?>
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container" style="padding-top: 15px;">
        <a href="/specialists" class="col-xs-6" style="text-align: center;">
            <div style="color: white">
                <img src="/icon/especialistas-01.png" style="width: 18%;height: 18%;"><br>
                <span>Especialistas</span>
            </div>
        </a>
        <a href="/file/{{$patient->patients_id}}" class="col-xs-6" style="text-align: center;">
            <div style="color: white">
                <img src="/icon/ficha-01.png" style="width: 18%;height: 18%;"><br>
                <span>Ficha</span>
            </div>
        </a>
    </div>
</nav>