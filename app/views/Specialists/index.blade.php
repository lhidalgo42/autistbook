@extends('layout.master')

@section('content')
    <?php $patient = Patient::find(PatientUser::where('users_id',Auth::user()->id)->get()->first()->patients_id); ?>
    <div class="container">
        @include('navs.top')
        <div class="row" style="margin-top: 11%;padding-bottom: 10px;">
            <div style="background-color: #CF2E4D ;border-color: #CF2E4DZ;min-height: 60px">
                <h3 style="color: white;  position: relative;  top: 50%;  transform: translateY(50%);margin-left:25px;font-size: 20px;">Especialistas</h3>
            </div>
            <?php $data = array(
                    array(
                            'img' => 'fernando-01.png','name' => 'Fernando Alvarez','activity' => 'Fonoudi&oacute;logo'
                    ),
                    array(
                            'img' => 'xandra-01.png','name' => 'Xandra Castro','activity' => 'Psic&oacute;logo'
                    ),
                    array(
                            'img' => 'josefina-01.png','name' => 'Josefina Claro','activity' => 'Trabajo Ocupacional'
                    ),
                    array(
                            'img' => 'pablo-01.png','name' => 'Pablo Sinn','activity' => 'Neur&oacute;logo'
                    )
            );
                ?>
            <table style="background-color: #f18c24;width: 100%;margin-top: -15px;">
                @foreach($data as $especialist)
                <tr style="height: 62px;">
                    <td rowspan="2"><img src="/icon/{{$especialist['img']}}" style="margin-left:30px;height: 60px;width: 60px;font-size: 16px;"></td><td style="color: white;text-align: left" >{{$especialist['name']}}<br style="  margin: 4px 0;"><strong style="color: #691029;">{{$especialist['activity']}}</strong></td><td rowspan="2"><a href="mailto:someone@example.com"><img src="/icon/icono_mail-01.png" style="height: 25%"></a> </td>
                </tr>
                <tr>
                    <td></td>
                </tr>
                @endforeach
                <tr style="height: 70px;">
                    <td style="width: 28%"><img src="/icon/agregarnuevo-01.png" style="margin-left:30px;height: 60px;width: 60px;"><td style="color: white;text-align: left" >Agregar Nuevo</td>
                </tr>
                    <tr style="height: 70px;">

                    </tr>
            </table>
        </div>
        @include('navs.bottom')
    </div>
@stop