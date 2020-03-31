
    <table id="topping1" class="table table-hover table-bordered mb-0">
        <!-- Table Head Start -->
        <thead>
        <tr>

            <th>Voluntario</th>
            <th>Institucion</th>
            <th>Proyecto</th>
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
