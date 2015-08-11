@extends('layout.master')

@section('content')
    <?php $patient = Patient::find(PatientUser::where('users_id',Auth::user()->id)->get()->first()->patients_id); ?>
    <div class="container">
        @include('navs.top2')
        @include('navs.charts')
        <div class="row" style="padding-top: 100px;padding-bottom: 100px;">
            <div id="day"></div>
        </div>
        <script>
            $(function() {
                Morris.Area({
                    element: 'day',
                    data: {{ json_encode($data) }},
                    xkey: 'period',
                    ykeys: ['{{$patient->name}}'],
                    labels: ['{{$patient->name}}'],
                    pointSize: 2,
                    hideHover: 'auto',
                    resize: true,
                    lineColors: ['#87d6c6'],
                    lineWidth:2,
                    pointSize:1,
                });
            });
        </script>
        @include('navs.bottom')
    </div>
@stop