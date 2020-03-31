@extends('admin.layouts.app')

@section('title')
    Instituciones
@endsection

@section('subtitle')
    Lista
@endsection

@section('buttons-heading')

    <a class="button button-outline button-success" href="{{route('institutions.create')}}">Nueva Institucion</a>
@endsection

@section('content')
    <div class="col-12 mb-30">
        <div class="box">
            <div class="box-body">
                <div class="table-responsive">
                    <table class="table table-hover table-bordered mb-0">
                        <!-- Table Head Start -->
                        <thead>
                        <tr>

                            <th>Nombre</th>
                            <th>Direccion</th>
                            <th>Telefono</th>
                            <th>codigo postal</th>
                            <th>sector</th>
                            <th></th>
                            <th></th>
                        </tr>
                        </thead><!-- Table Head End -->
                        <!-- Table Body Start -->
                        <tbody>
                        @if($institution->isEmpty())
                            <tr>
                                <td colspan="4" class="text-center">No hay información</td>
                            </tr>
                        @endif
                        @foreach($institution as $institutions)
                            <tr>
                                <td>{{$institutions->name}}</td>
                                <td>{{$institutions->address}}</td>
                                <td>{{$institutions->phone}}</td>
                                <td>{{$institutions->postal_code}}</td>
                                <td>{{$institutions->sector ? $institutions->sector->name : 'sin programa realacionado'}}</td>
                                <td>
                                    <div class="table-action-buttons">
                                        <a class="edit button button-box button-xs button-info" href="{{route('institutions.edit', $institutions->id)}}"><i class="zmdi zmdi-edit"></i></a>
                                    </div>
                                </td>
                                <td>
                                    <div class="table-action-buttons">
                                        {!! Form::open(['route' =>['institutions.destroy', $institutions->id],
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
            {{ $institution->render() }} <!-- pa que o que? -->
            </div>
        </div>
    </div>
@endsection