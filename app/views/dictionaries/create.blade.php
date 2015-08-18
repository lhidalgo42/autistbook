@extends('layout.master')

@section('content')
    <div style="height: 70px;background-color: rgb(240,140,35);color: white">
        <span style="position: relative;  top: 20px;font-size: 16px;margin-left: 30px;">Nueva Conducta</span>
    </div>
    <div class="container" style="background-color: rgb(105,17,42)">
        <input type="text" placeholder="Nombre de la Conducta" style="margin-top: 30px;width : 330px;">
        <textarea name="area" style="width: 330px;margin-top: 30px;height: 240px;" placeholder="Descripcion"></textarea>
        <div class="clearfix" id="panel" style="position:fixed;background-color: rgb(240,140,35);display: none;margin-top: -70px;padding-top: 5px;padding-bottom: 5px;width: 330px;">
            <div style="color: white;" class="col-xs-4">
                <img src="/icon/galeria-01.png" style="width: 40%;margin-left: 7px;"><br style="  margin: 5px 0;">Galeria
            </div>
            <div style="color: white;" class="col-xs-4">
                <img src="/icon/foto-01.png" style="width: 40%;margin-left:30px;"><br style="  margin: 5px 0;"><span style="margin-left: 30px;">Foto</span>
            </div>
            <div style="color: white;" class="col-xs-4">
                <img src="/icon/video-01.png" style="width: 40%;margin-left: 44px;"><br style="  margin: 5px 0;"><span style="margin-left: 42px;">Video</span>
            </div>
        </div>
        <div style="margin-top: 15px;padding-bottom: 30px;">
            <span style="color: white;"><img src="/icon/icono_adjuntar-01.png" style="width: 10%;"><span style="margin-left: 5px;">Adjuntar Archivo </span><button class="pull-right" style="background-color: rgb(240,140,35);border-color: rgb(240,140,35);color: white;" id="add">A&ntilde;adir</button></span>
        </div>
        <script>
            $("#add").click(function(){
                $(this).html('publicar');
                $("#panel").css('display','block');
            })
        </script>
        @include('navs.bottom')
    </div>
@stop
@section('css')
    <style>

    </style>
@stop
