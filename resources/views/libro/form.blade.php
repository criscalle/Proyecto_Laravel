<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('categoria') }}
            {{ Form::text('categoria', $libro->categoria, ['class' => 'form-control' . ($errors->has('categoria') ? ' is-invalid' : ''), 'placeholder' => 'Categoria']) }}
            {!! $errors->first('categoria', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nombre') }}
            {{ Form::text('nombre', $libro->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Autor') }}
            {{ Form::text('Autor', $libro->Autor, ['class' => 'form-control' . ($errors->has('Autor') ? ' is-invalid' : ''), 'placeholder' => 'Autor']) }}
            {!! $errors->first('Autor', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_editorial') }}
            {{ Form::text('id_editorial', $libro->id_editorial, ['class' => 'form-control' . ($errors->has('id_editorial') ? ' is-invalid' : ''), 'placeholder' => 'Id Editorial']) }}
            {!! $errors->first('id_editorial', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
           <input type="file" id="foto" name="foto">
            
        </div>
        <div hidden="true" class="form-group">
            {{ Form::label('user') }}
            {{ Form::text('user', Auth::user()->email, ['class' => 'form-control' . ($errors->has('user') ? ' is-invalid' : ''), 'placeholder' => 'User']) }}
            {!! $errors->first('user', '<div class="invalid-feedback">:message</div>') !!}
        </div>


    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Ingresar') }}</button>
    </div>
</div>