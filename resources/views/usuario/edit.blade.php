@extends('layouts.maestra')

@section('template_title')
    {{ __('Update') }} User
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

         

                @includeif('partials.errors')
                @if(Auth::user()->id == $usuario->id)
                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Actualizar') }} Usuario</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('usuario.update', $usuario->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('usuario.form')

                        </form>
                    </div>
                  
                </div>
                @endif
            </div>
        </div>
    </section>
@endsection
