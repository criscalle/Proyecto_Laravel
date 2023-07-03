@extends('layouts.maestra')

@section('template_title')
    {{ $libro->name ?? "{{ __('Mostrar') Libro" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Mostrar') }} Libro</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('libros.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Categoria:</strong>
                            {{ $libro->categoria }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $libro->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Autor:</strong>
                            {{ $libro->Autor }}
                        </div>
                        <div class="form-group">
                            <strong>Id Editorial:</strong>
                            {{ $libro->id_editorial }}
                        </div>
                        <div class="form-group">
                            <strong>Foto:</strong>
                            <img src="{{ asset('storage').'/'.$libro->foto}}" width="80px">
                        </div>
                
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
