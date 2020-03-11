<div class="col-12 mb-20">
    {{ Form::label('key','Clave') }}
    {{ Form::text('key', null, ['class' => 'form-control' . ($errors->has('key') ? ' is-invalid': '')]) }}
    @error('key')
    <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>
<div class="col-12 mb-20">
    {{ Form::label('name','Nombre del voluntario') }}
    {{ Form::text('name', null, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid': '')]) }}
    @error('name')
    <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>
<div class="col-12 mb-20">
    {{ Form::label('last_name','Apellido Paterno') }}
    {{ Form::text('last_name', null, ['class' => 'form-control' . ($errors->has('last_name') ? ' is-invalid': '')]) }}
    @error('last_name')
    <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>
<div class="col-12 mb-20">
    {{ Form::label('second_name','Apellido Materno') }}
    {{ Form::text('second_name', null, ['class' => 'form-control' . ($errors->has('second_name') ? ' is-invalid': '')]) }}
    @error('second_name')
    <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>
<div class="col-12 mb-20">
    {{ Form::label('address','direccion') }}
    {{ Form::text('address', null, ['class' => 'form-control' . ($errors->has('address') ? ' is-invalid': '')]) }}
    @error('address')
    <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>
<div class="col-12 mb-20">
    {{ Form::label('phone','Telefono ') }}
    {{ Form::text('phone', null, ['class' => 'form-control' .($errors->has('phone') ? ' is-invalid': '')]) }}
    @error('phone')
    <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>
<div class="col-12 mb-20">
    {{ Form::label('references_id', 'Programa') }}
    {{ Form::select('references_id', $references, null, ['class' => 'form-control' . ($errors->has('references_id') ? ' is-invalid': '')]) }}
    @error('references_id')
    <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>