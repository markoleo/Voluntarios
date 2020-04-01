@extends('admin.layouts.app')

@section('title')
    Pagina principal
@endsection

@section('subtitle')
    Inicio
@endsection

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <div class="card-header">
                            <div align="center">

                                <font FACE="impact" SIZE=6 >
                                    <label class="text-center">Hola Bienvenido <span class="name">{{ Auth::user()->name }}</span></label>
                                </font>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>









@endsection

