@extends('layout.master')

@section('content')
    <?php $patient = Patient::find(PatientUser::where('users_id',Auth::user()->id)->get()->first()->patients_id); ?>
    <div class="container">
        @include('navs.dictionarySearch')
        <div class="clearfix"></div>
        <div class="row" style="margin-top: 11%;padding-bottom: 10px;">
            <table style="background-color: rgb(105,17,42);width: 100%;margin-top: 25px;" id="table">
                <tbody>

                </tbody>
                <tfoot>
                <tr style="background-color: rgb(240,140,35);height: 65px;">
                    <td style="color: white;text-align: center;"><a style="color: white;" href="dictionary/add">a&ntilde;adir nueva conducta</a></td>
                </tr>
                <tr style="height: 70px;"></tr>
                </tfoot>
            </table>
        </div>
        <script>
            var table = $("#table").children('tbody');
            table.html('');
            $.ajax({
                url: "/dictionary/query",
                data: {data:''},
                type: "POST",
                success: function( data ) {
                    for(var i = 0; i < data.length;i++){
                        table.append('<tr style="height: 65px;">' +
                                '  <td style="padding-left: 30px;border-bottom: 2px solid #ffffff;"><h3><a href="/dictionary/'+data[i].id+'" style="color: white;">'+data[i].name+'</a></h3></td>' +
                                '</tr>');

                    }
                }
            });
            $("#search").keyup(function(){
                var table = $("#table").children('tbody');
                table.html('');
                $.ajax({
                    url: "/dictionary/query",
                    data: { data: $(this).val()},
                    type: "POST",
                    success: function( data ) {
                        for(var i = 0; i < data.length;i++){
                            table.append('<tr style="height: 70px;">' +
                                         '  <td style="padding-left: 30px;border-bottom: 2px solid #ffffff;"><h3><a href="#" style="color: white;">'+data[i].name+'</a></h3></td>' +
                                         '</tr>');

                        }
                    }
                });
            });
        </script>
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
        width: 80%;
        height: 34px;
        -webkit-appearance: none;
    }
    ::-webkit-input-placeholder { /* WebKit, Blink, Edge */
    color:    #d3d3d3;
    }
    :-moz-placeholder { /* Mozilla Firefox 4 to 18 */
    color:    #d3d3d3;
    opacity:  1;
    }
    ::-moz-placeholder { /* Mozilla Firefox 19+ */
    color:    #d3d3d3;
    opacity:  1;
    }
    :-ms-input-placeholder { /* Internet Explorer 10-11 */
    color:    #d3d3d3;
    }
    </style>
@stop
