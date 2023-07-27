@extends('layouts.app')

@section('template_title')
    {{ $proveedore->name ?? "{{ __('Show') Proveedore" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Proveedore</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('proveedores.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Name:</strong>
                            {{ $proveedore->name }}
                        </div>
                        <div class="form-group">
                            <strong>Razon Social:</strong>
                            {{ $proveedore->razon_social }}
                        </div>
                        <div class="form-group">
                            <strong>Numero Proveedor:</strong>
                            {{ $proveedore->numero_proveedor }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Registro:</strong>
                            {{ $proveedore->fecha_registro }}
                        </div>
                        <div class="form-group">
                            <strong>Rfc:</strong>
                            {{ $proveedore->rfc }}
                        </div>
                        <div class="form-group">
                            <strong>Region Id:</strong>
                            {{ $proveedore->region_id }}
                        </div>
                        <div class="form-group">
                            <strong>Logo:</strong>
                            {{ $proveedore->logo }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
