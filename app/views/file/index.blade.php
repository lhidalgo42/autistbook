@extends('layout.master')

@section('content')
    <?php $patient = Patient::find(PatientUser::where('users_id',Auth::user()->id)->get()->first()->patients_id); ?>
    <div class="container">
        @include('navs.top')
        <div class="row" style="margin-top: 11%;padding-bottom: 10px;">
            <div style="background-color: rgb(207,46,77); border-color: rgb(207,46,77);min-height: 60px">
                <h3 style="color: white;  position: relative;  top: 50%;  transform: translateY(50%);margin-left:50px; ">Ficha</h3>
            </div>
            <table style="background-color: #f18c24;width: 100%;margin-top: -15px;">
                <tr style="height: 70px;">
                    <td><input type="text" name="name" placeholder="Nombres"></td>
                </tr>
                <tr style="height: 70px;">
                    <td><input type="text" placeholder="Apellidos"></td>
                </tr>
                <tr style="height: 70px;">
                    <td><input type="text" placeholder="Fecha de Nacimiento"></td>
                </tr>
                <tr style="height: 70px;">
                    <td><input type="text" placeholder="Diagnostico"></td>
                </tr>
                <tr style="height: 70px;">
                    <td><input type="text" placeholder="Medicamentos"></td>
                </tr>
                <tr style="height: 70px;">
                    <td><input type="text" placeholder="N&uacute;meros de Contacto (emergencias)"></td>
                </tr>
                <tr style="height: 70px;">

                </tr>
            </table>
        </div>
        @include('navs.bottom')
    </div>
@stop
@section('css')
    <style>
    input[type=text] {
        background: transparent;
        border: none;
        border-bottom: 2px solid #000000;
        padding: 2px 5px;
        width: 100%;
        height: 40px;
        border-bottom-color: #f9c359;
    }
    ::-webkit-input-placeholder { /* WebKit, Blink, Edge */
    color:    #ffffff;
    font-size: 16px;
    }
    :-moz-placeholder { /* Mozilla Firefox 4 to 18 */
    color:    #ffffff;
    opacity:  1;
    font-size: 16px;
    }
    ::-moz-placeholder { /* Mozilla Firefox 19+ */
    color:    #ffffff;
    opacity:  1;
    font-size: 16px;
    }
    :-ms-input-placeholder { /* Internet Explorer 10-11 */
    color:    #ffffff;
    font-size: 16px;
    }
    </style>
@stop
