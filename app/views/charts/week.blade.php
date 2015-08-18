@extends('layout.master')

@section('content')
    <?php $patient = Patient::find(PatientUser::where('users_id',Auth::user()->id)->get()->first()->patients_id); ?>
    <div class="container">
        @include('navs.top2')
        @include('navs.charts')
        <div class="row" style="padding-top: 100px;padding-bottom: 100px;">
            <img src="/img/week.png" style="width: 330px;">
        </div>

        @include('navs.bottom')
    </div>
@stop