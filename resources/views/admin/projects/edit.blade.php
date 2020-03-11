@extends('admin.layouts.app')

@section('title')
    Proyectos
@endsection

@section('subtitle')
    Editar
@endsection

@section('content')
    <div class="col-lg-12 col-12 mb-30">
        <div class="box">
            <div class="box-body">
                {{ Form::model($projects, ['route' => ['projects.update',$projects->id], 'method' => 'PUT'])}}
                <div class="row mbn-20">
                    @include('admin.projects.partials.form')
                    <div class="col-12 mb-20 text-right">
                        {{ Form::submit('Actualizar', ['class' => 'button button-outline button-primary']) }}
                        <a href="{{route('projects.index')}}" class="button button-outline button-danger">Cancelar</a>
                    </div>
                </div>
                {{ Form::close() }}
            </div>
        </div>
    </div>

@endsection