<div class="col-12 mb-20">
    {{ Form::label('name','Nombre del programa') }}
    {{ Form::text('name', null, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid': '')]) }}
    @error('name')
    <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>
<div class="col-12 mb-20">
    {{ Form::label('reference','programa asociado ') }}
    {{ Form::text('reference', null, ['class' => 'form-control' .($errors->has('category') ? ' is-invalid': '')]) }}
    @error('reference')
    <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>