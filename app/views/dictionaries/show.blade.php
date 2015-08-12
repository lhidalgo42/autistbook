@extends('layout.master')

@section('content')

    <div class="container">
        @include('navs.dictionaryName')
        <div class="clearfix"></div>
        <div class="row" style="margin-top: 11%;padding-bottom: 10px;">
            <table style="background-color: rgb(86,14,36);width: 100%;margin-top: 15px;" id="table">
                <tbody>
                <tr style="background-color: rgb(105,17,42);height: 70px;">
                    <td style="padding-left: 15px;padding-right: 15px;color: rgb(241,140,36);"><strong>Descripci&oacute;n</strong></td>
                </tr>
                <tr style="background-color: rgb(105,17,42);height: 150px;">
                    <td style="padding-left: 15px;padding-right: 15px;color: white;">
                        {{$dictionary->description}}
                    </td>
                </tr>
                <tr style="background-color: rgb(86,14,36);height: 70px;">
                    <td style="padding-left: 15px;padding-right: 15px;color: rgb(241,140,36);"><strong>Soluci&oacute;n</strong></td>
                </tr>
                <tr style="background-color: rgb(86,14,36);height: 150px;">
                    <td style="padding-left: 15px;padding-right: 15px;color: white;">
                        {{$dictionary->solution}}
                    </td>
                </tr>

                </tbody>
                <tfoot>
                <tr style="height: 70px;background-color: rgb(86,14,36);"></tr>
                </tfoot>
            </table>
        </div>
        @include('navs.bottom')
    </div>
@stop
@section('css')
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
@stop
