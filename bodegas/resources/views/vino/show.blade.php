@extends('layouts.app')

@section('template_title')
    {{ $vino->name ?? "{{ __('Show') Vino" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Vino</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('vinos.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $vino->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Descripcion:</strong>
                            {{ $vino->descripcion }}
                        </div>
                        <div class="form-group">
                            <strong>Año:</strong>
                            {{ $vino->año }}
                        </div>
                        <div class="form-group">
                            <strong>Alcohol:</strong>
                            {{ $vino->alcohol }}
                        </div>
                        <div class="form-group">
                            <strong>Tipo De Vino:</strong>
                            {{ $vino->tipo de vino }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
