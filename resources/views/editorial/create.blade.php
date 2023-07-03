@extends('layouts.maestra')

@section('template_title')
    {{ __('Create') }} Editorial
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Crear') }} Editorial</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('editorial.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('editorial.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
