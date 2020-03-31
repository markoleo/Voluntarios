@extends('admin.layouts.app')

@section('title')
   Coberturas
@endsection

@section('subtitle')
    Lista
@endsection

@section('buttons-heading')

    <a class="button button-outline button-success" href="{{route('toppings.create')}}">Nueva Cobertura</a>
@endsection

@section('content')
    <div class="col-12 mb-30">
        <div class="box">
            <div class="box-head">
                <div class="col-md-4 col-lg-4 col-12 mb-20">
                    {{ Form::open(['route' => 'toppings.index', 'method' => 'GET']) }}
                    <div class="input-group">
                        {{ Form::select('projects', $project, request('projects', 1), ['class' => 'form-control']) }}
                        <div class="input-group-append">
                            <button type="submit" class="btn button-dark" ><i class="zmdi zmdi-search"></i></button>
                        </div>
                    </div>
                    {{ Form::close() }}
                </div>
            </div>
            <div class="box-body">
                <a class="button button-outline button-success" href="{{route('toppings.excel')}}">Exportar Excel</a>

                <div class="table-responsive">
                    <table id="topping1" class="table table-hover table-bordered mb-0">
                        <!-- Table Head Start -->
                        <thead>
                        <tr>

                            <th>Voluntario</th>
                            <th>Institucion</th>
                            <th>Proyecto</th>
                            <th>Semana Correspondiente</th>
                            <th>hombres</th>
                            <th>mujeres</th>
                            <th>total de personas</th>
                            <th>Fecha</th>
                            <th></th>
                        </tr>
                        </thead><!-- Table Head End -->
                        <!-- Table Body Start -->
                        <tbody>

                        @foreach($toppings as $topping)
                            <tr>
                                <td>{{$topping->volunteer ? $topping->volunteer->name:'sin voluntarios'}}</td>
                                <td>{{$topping->institution ? $topping->institution->name:'sin instituciones'}}</td>
                                <td>{{$topping->project ? $topping->project->short_name:'sin proyectos realcionados'}}</td>
                                <td>{{$topping->week ? $topping->week->week:'sin semanas realcionados'}}</td>
                                <td>{{$topping->cob_mean}}</td>
                                <td>{{$topping->cob_woman}}</td>
                                <td>{{$topping->total_people}}</td>
                                <td>{{$topping->created_at}}</td>

                                <td>
                                    <div class="table-action-buttons">
                                        <a class="edit button button-box button-xs button-info" href="#"><i class="zmdi zmdi-edit"></i></a>
                                    </div>
                                </td>

                            </tr>
                        @endforeach
                        </tbody><!-- Table Body End -->
                    </table>
                </div>
          <!-- pa que o que? -->
            </div>
        </div>
    </div>
@endsection

@section('custom-js')
    <script src="{{asset("assets/js/toppings/index.js")}}"></script>
@endsection