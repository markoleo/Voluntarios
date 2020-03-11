<div class="col-12 mb-20">
    {{ Form::label('name','Nombre del proyecto') }}
    {{ Form::text('name', null, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid': '')]) }}
    @error('name')
    <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>
<div class="col-12 mb-20">
    {{ Form::label('short_name','Abreviatura del proyecto ') }}
    {{ Form::text('short_name', null, ['class' => 'form-control' .($errors->has('short_name') ? ' is-invalid': '')]) }}
    @error('short_name')
    <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>
<div class="col-12 mb-20">
    {{ Form::label('Project_Type','Tipo de Proyecto') }}
    {{ Form::text('Project_Type', null, ['class' => 'form-control' .($errors->has('Project_Type') ? ' is-invalid': '')]) }}
    @error('Project_Type')
    <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>