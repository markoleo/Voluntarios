@extends('admin.layouts.app')

@section('title')
    Proyectos
@endsection

@section('subtitle')
    Lista
@endsection

@section('buttons-heading')
    <a class="button button-outline button-success" href="{{route('projects.create')}}">Nuevo proyecto</a>
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
                            <th>Abreviatura</th>
                            <th>Tipo de Proyecto</th>
                            <th></th>
                            <th></th>
                        </tr>
                        </thead><!-- Table Head End -->
                        <!-- Table Body Start -->
                        <tbody>
                        @if($projects->isEmpty())
                            <tr>
                                <td colspan="3" class="text-center">No hay información</td>
                            </tr>
                        @endif
                        @foreach($projects as $project)
                            <tr>

                                <td>{{$project->name}}</td>
                                <td>{{$project->short_name}}</td>
                                <td>{{$project->Project_Type}}</td>
                                <td>
                                    <div class="table-action-buttons">
                                        <a class="edit button button-box button-xs button-info" href="{{route('projects.edit', $project->id)}}"><i class="zmdi zmdi-edit"></i></a>
                                    </div>
                                </td>
                                <td>
                                    <div class="table-action-buttons">
                                        {!! Form::open(['route' =>['projects.destroy', $project->id],
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
            {{ $projects->links() }} <!-- pa que o que? -->
            </div>
        </div>
    </div>
@endsection