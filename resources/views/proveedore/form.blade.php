<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('name') }}
            {{ Form::text('name', $proveedore->name, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Name']) }}
            {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('razon_social') }}
            {{ Form::text('razon_social', $proveedore->razon_social, ['class' => 'form-control' . ($errors->has('razon_social') ? ' is-invalid' : ''), 'placeholder' => 'Razon Social']) }}
            {!! $errors->first('razon_social', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('numero_proveedor') }}
            {{ Form::text('numero_proveedor', $proveedore->numero_proveedor, ['class' => 'form-control' . ($errors->has('numero_proveedor') ? ' is-invalid' : ''), 'placeholder' => 'Numero Proveedor']) }}
            {!! $errors->first('numero_proveedor', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fecha_registro') }}
            {{ Form::text('fecha_registro', $proveedore->fecha_registro, ['class' => 'form-control' . ($errors->has('fecha_registro') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Registro']) }}
            {!! $errors->first('fecha_registro', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('rfc') }}
            {{ Form::text('rfc', $proveedore->rfc, ['class' => 'form-control' . ($errors->has('rfc') ? ' is-invalid' : ''), 'placeholder' => 'Rfc']) }}
            {!! $errors->first('rfc', '<div class="invalid-feedback">:message</div>') !!}
        </div>





        <div class="form-group">
            {{ Form::label('region_id') }}
            {{ Form::select('region_id',$regiones, $proveedore->region_id, ['class' => 'form-control' . ($errors->has('region_id') ? ' is-invalid' : ''), 'placeholder' => 'Region Id']) }}
            {!! $errors->first('region_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>






        <div class="form-group">
            {{ Form::label('logo') }}
            {{ Form::text('logo', $proveedore->logo, ['class' => 'form-control' . ($errors->has('logo') ? ' is-invalid' : ''), 'placeholder' => 'Logo']) }}
            {!! $errors->first('logo', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>