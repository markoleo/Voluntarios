@extends('admin.layouts.app')

@section('title')
    Programas Relacionados
@endsection

@section('subtitle')
    Lista
@endsection

@section('buttons-heading')
    <a class="button button-outline button-success" href="{{route('references.create')}}">Nuevo programa</a>
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
                            <th>Programa</th>
                            <th></th>
                        </tr>
                        </thead><!-- Table Head End -->
                        <!-- Table Body Start -->
                        <tbody>
                        @if($references->isEmpty())
                            <tr>
                                <td colspan="3" class="text-center">No hay información</td>
                            </tr>
                        @endif
                        @foreach($references as $reference)
                            <tr>
                                <td>{{$reference->name}}</td>
                                <td>{{$reference->reference}}</td>
                                <td>
                                    <div class="table-action-buttons">
                                      <a class="edit button button-box button-xs button-info" href="{{route('references.edit', $reference->id)}}"><i class="zmdi zmdi-edit"></i></a>
                                    </div>
                                </td>
                                <td>
                                    <div class="table-action-buttons">
                                        {!! Form::open(['route' =>['references.destroy', $reference->id],
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
            {{ $references->links() }} <!-- pa que o que? -->
            </div>
        </div>
    </div>
@endsection