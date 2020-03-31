<div class="col-12 mb-20">
    {{ Form::label('volunteer_id', 'voluntarios') }}
    {{ Form::select('volunteer_id', $volunteers, null, ['class' => 'form-control' . ($errors->has('volunteer_id') ? ' is-invalid': '')]) }}
    @error('volunteer_id')
    <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="col-12 mb-20">
    {{ Form::label('institution_id', 'instituciones') }}
    {{ Form::select('institution_id', $institution, null, ['class' => 'form-control' . ($errors->has('institution_id') ? ' is-invalid': '')]) }}
    @error('institution_id')
    <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>
<div class="col-12 mb-20">
    {{ Form::label('project_id', 'proyectos') }}
    {{ Form::select('project_id', $project, null, ['class' => 'form-control' . ($errors->has('project_id') ? ' is-invalid': '')]) }}
    @error('project_id')
    <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="col-12 mb-20">
    {{ Form::label('week_id', 'Semana correspondiente ') }}
    {{ Form::select('week_id', $week, null, ['class' => 'form-control' . ($errors->has('week_id') ? ' is-invalid': '')]) }}
    @error('week_id')
    <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="col-4 mb-20">
    <label>Cantidad de Hombres </label>

    <input type="text" class="form-control" name="cob_mean" id="cob_mean">
</div>

<div class="col-4 mb-20">
    <label>Cantidad de Mujeres </label>

    <input type="text" class="form-control" name="cob_woman" id="cob_woman">
</div>

<div class="col-4 mb-20">
    <label>Total de Personas </label>

    <input type="text" class="form-control" name="total_people" id="total_people">
</div>



