@extends('admin.layouts.app')

@section('title')
    Voluntarios
@endsection

@section('subtitle')
    Nuevo Voluntario
@endsection

@section('content')
    <div class="col-lg-12 col-12 mb-30">
        <div class="box">
            <div class="box-body">
                {{ Form::open(['route' => 'volunteers.store']) }}
                <div class="row mbn-20">
                    @include('admin.volunteers.partials.form')
                    <div class="col-12 mb-20 text-right">
                        {{ Form::submit('Guardar', ['class' => 'button button-outline button-primary']) }}
                        <a href="{{route('volunteers.index')}}" class="button button-outline button-danger">Cancelar</a>
                    </div>
                </div>
                {{ Form::close() }}
            </div>
        </div>
    </div>
@endsection