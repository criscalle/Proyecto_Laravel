@extends('layouts.maestra')

@section('template_title')
    {{ $usuario->name ?? "{{ __('Mostrar') usuario" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Mostrar') }} usuario</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('usuario.index') }}"> {{ __('Regresar') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Name:</strong>
                            {{ $usuario->name }}
                        </div>
                        <div class="form-group">
                            <strong>Email:</strong>
                            {{ $usuario->email }}
                        </div>
                        <div class="form-group">
                            <strong>Foto:</strong>
                            {{ $usuario->foto }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
