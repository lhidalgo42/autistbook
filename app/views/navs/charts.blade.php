<?php $user = Auth::user();
$patient = PatientUser::where('users_id',$user->id)->get()->first();
?>
<nav class="navbar" style="top: 80px;border-width: 0 0 1px;background-color: #69112a;border-color: #69112a;">
    <div class="container" style="padding-top: 15px;">
        <a href="/charts/{{$patient->patients_id}}/day" class="col-xs-4" style="text-align: center;">
            <div style="color: white">
                <img src="/icon/diario-01.png" style="width: 15%;height: 15%;"><br>
                <span>Diario</span>
            </div>
        </a>
        <a href="/charts/{{$patient->patients_id}}/week" class="col-xs-4" style="text-align: center;">
            <div style="color: white">
                <img src="/icon/semanal-01.png" style="width: 15%;height: 15%;"><br>
                <span>Semanal</span>
            </div>
        </a>
        <a href="/charts/{{$patient->patients_id}}/month" class="col-xs-4" style="text-align: center;">
            <div style="color: white">
                <img src="/icon/mensual-01.png" style="width: 15%;height: 15%;"><br>
                <span>Mensual</span>
            </div>
        </a>
    </div>
</nav>