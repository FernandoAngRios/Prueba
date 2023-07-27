@extends('layouts.app')

@section('template_title')
    {{ __('Update') }} Regione
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Update') }} Regione</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('regiones.update', $regione->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('regione.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
