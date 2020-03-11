@extends('admin.layouts.app')

@section('title')
    Sectores
@endsection

@section('subtitle')
    Nuevo Sector
@endsection

@section('content')
    <div class="col-lg-12 col-12 mb-30">
        <div class="box">
            <div class="box-body">
                {{ Form::open(['route' => 'sector.store']) }}
                <div class="row mbn-20">
                    @include('admin.sector.partials.form')
                    <div class="col-12 mb-20 text-right">
                        {{ Form::submit('Guardar', ['class' => 'button button-outline button-primary']) }}
                        <a href="{{route('sector.index')}}" class="button button-outline button-danger">Cancelar</a>
                    </div>
                </div>
                {{ Form::close() }}
            </div>
        </div>
    </div>
@endsection