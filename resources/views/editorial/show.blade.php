@extends('layouts.maestra')

@section('template_title')
    {{ $editorial->name ?? "{{ __('Show') Editorial" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Mostrar') }} Editorial</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('editorial.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $editorial->nombre }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
