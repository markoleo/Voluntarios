@extends('admin.layouts.app')

@section('title')
    Sectores
@endsection

@section('subtitle')
    Lista
@endsection

@section('buttons-heading')
    <a class="button button-outline button-success" href="{{route('sector.create')}}">Nuevo sector</a>
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
                            <th>Categoria</th>
                            <th></th>
                            <th></th>
                        </tr>
                        </thead><!-- Table Head End -->
                        <!-- Table Body Start -->
                        <tbody>
                        @if($sectors->isEmpty())
                            <tr>
                                <td colspan="3" class="text-center">No hay información</td>
                            </tr>
                        @endif
                        @foreach($sectors as $sector)
                            <tr>
                                <td>{{$sector->name}}</td>
                                <td>{{$sector->category}}</td>
                                <td>
                                    <div class="table-action-buttons">
                                        <a class="edit button button-box button-xs button-info" href="{{route('sector.edit', $sector->id)}}"><i class="zmdi zmdi-edit"></i></a>
                                    </div>
                                </td>
                                <td>
                                    <div class="table-action-buttons">
                                        {!! Form::open(['route' =>['sector.destroy', $sector->id],
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
            {{ $sectors->links() }} <!-- pa que o que? -->
            </div>
        </div>
    </div>
@endsection