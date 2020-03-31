
<div class="col-12 mb-20">
    {{ Form::label('name','Nombre de la Institucion') }}
    {{ Form::text('name', null, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid': '')]) }}
    @error('name')
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
    {{ Form::label('postal_code','codigo postal ') }}
    {{ Form::text('postal_code', null, ['class' => 'form-control' .($errors->has('postal_code') ? ' is-invalid': '')]) }}
    @error('postal_code')
    <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="col-12 mb-20">
    {{ Form::label('sector_id', 'sector') }}
    {{ Form::select('sector_id', $sector, null, ['class' => 'form-control' . ($errors->has('sector_id') ? ' is-invalid': '')]) }}
    @error('sector_id')
    <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>