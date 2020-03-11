<div class="col-12 mb-20">
    {{ Form::label('name','Nombre del sector') }}
    {{ Form::text('name', null, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid': '')]) }}
    @error('name')
    <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>
<div class="col-12 mb-20">
    {{ Form::label('category','Categoria ') }}
    {{ Form::text('category', null, ['class' => 'form-control' .($errors->has('category') ? ' is-invalid': '')]) }}
    @error('category')
    <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>