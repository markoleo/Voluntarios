@extends('admin.layouts.app')

@section('title')
    Voluntarios
@endsection

@section('subtitle')
    Lista
@endsection

@section('buttons-heading')

    <a class="button button-outline button-success" href="{{route('volunteers.create')}}">Nuevo Voluntario</a>
@endsection

@section('content')
    <div class="col-12 mb-30">
        <div class="box">
            <div class="box-head">
                <div class="col-md-4 col-lg-4 col-12 mb-20">
                    {{ Form::open(['route' => 'volunteers.index', 'method' => 'GET']) }}
                    <div class="input-group">
                        {{ Form::select('references', $reference, request('references', 1), ['class' => 'form-control']) }}
                        <div class="input-group-append">
                            <button type="submit" class="btn button-dark" ><i class="zmdi zmdi-search"></i></button>
                        </div>
                    </div>
                    {{ Form::close() }}
                </div>
            </div>

            <div class="box-body">
                <div class="table-responsive">
                    <table class="table table-hover table-bordered mb-0">
                        <!-- Table Head Start -->
                        <thead>
                        <tr>
                            <th>Clave</th>
                            <th>Nombre</th>
                            <th>Apellido Paterno</th>
                            <th>Apellido Materno</th>
                            <th>Direccion</th>
                            <th>Telefono</th>
                            <th>Programa</th>
                            <th></th>
                            <th></th>
                        </tr>
                        </thead><!-- Table Head End -->
                        <!-- Table Body Start -->
                        <tbody>
                        @if($volunteers->isEmpty())
                            <tr>
                                <td colspan="4" class="text-center">No hay información</td>
                            </tr>
                        @endif
                        @foreach($volunteers as $volunteer)
                            <tr>
                                <td>{{$volunteer->key}}</td>
                                <td>{{$volunteer->name}}</td>
                                <td>{{$volunteer->last_name}}</td>
                                <td>{{$volunteer->second_name}}</td>
                                <td>{{$volunteer->address}}</td>
                                <td>{{$volunteer->phone}}</td>
                                <td>{{$volunteer->references ? $volunteer->references->name : 'sin programa realacionado'}}</td>
                                <td>
                                    <div class="table-action-buttons">
                                        <a class="edit button button-box button-xs button-info" href="{{route('volunteers.edit', $volunteer->id)}}"><i class="zmdi zmdi-edit"></i></a>
                                    </div>
                                </td>
                                <td>
                                    <div class="table-action-buttons">
                                        {!! Form::open(['route' =>['volunteers.destroy', $volunteer->id],
                                        'method' => 'DELETE']) !!}

                                            <button  class="delete button button-box button-xs  button-danger">
                                                <a>
                                                    <i class="zmdi zmdi-delete"></i>
                                                </a>
                                            </button>
                                        {!! Form::close() !!}

                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody><!-- Table Body End -->
                    </table>
                </div>
            {{ $volunteers->render() }} <!-- pa que o que? -->
            </div>
        </div>
    </div>
@endsection