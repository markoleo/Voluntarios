@extends('admin.layouts.app')

@section('title')
    Coberturas
@endsection

@section('subtitle')
    Nuevo Cobertura
@endsection

@section('content')
    <div class="col-lg-12 col-12 mb-30">
        <div class="box">
            <div class="box-body">
                {{ Form::open(['route' => 'toppings.store']) }}
                <div class="row mbn-20">
                    @include('admin.toppings.partials.form')
                    <div class="col-12 mb-20 text-right">
                        {{ Form::submit('Guardar', ['class' => 'button button-outline button-primary']) }}
                        <a href="{{route('toppings.index')}}" class="button button-outline button-danger">Cancelar</a>
                    </div>
                </div>
                {{ Form::close() }}
            </div>
        </div>
    </div>
@endsection


@section('custom-js')
    <script src="{{asset("assets/js/toppings/create.js")}}"></script>
@endsection