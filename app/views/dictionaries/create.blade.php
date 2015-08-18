@extends('layout.master')

@section('content')
    <div style="height: 70px;background-color: rgb(240,140,35);color: white">
        <span style="position: relative;  top: 20px;font-size: 16px;margin-left: 30px;">Nueva Conducta</span>
    </div>
    <div class="container" style="background-color: rgb(105,17,42)">
        <input type="text" placeholder="Nombre de la Conducta" style="margin-top: 30px;width : 330px;">
        <textarea name="area" style="width: 330px;margin-top: 30px;height: 200px;" placeholder="Descripcion"></textarea>
        <div style="margin-top: 15px;">
            <span style="color: white;"><img src="/icon/icono_adjuntar-01.png" style="width: 10%;"><span style="margin-left: 5px;">Adjuntar Archivo </span><button class="pull-right" style="background-color: rgb(240,140,35);border-color: rgb(240,140,35);color: white;">A&ntilde;adir</button></span>
        </div>
        <div class="row" style="margin-top: 11%;padding-bottom: 10px;">
        </div>
        @include('navs.bottom')
    </div>
@stop
@section('css')
    <style>

    </style>
@stop
