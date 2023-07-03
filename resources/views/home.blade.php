@extends('layouts.maestra')

@section('content')

<h2>Novedades</h2>
<link rel="stylesheet" href="{{asset('landing/assets/css/Style_home.css')}}">
<div class="novedades">
    <div class="contenedor">
        <h4>IT</h4>
        <h5>Stephen King</h5>
    <img src="{{ asset('landing/assets/img/it.jpg') }}">
    </div>
    <div div class="contenedor">
        <h4>Jaque al Psicoanalista</h4>
        <h5>John Katzenbach</h5>
    <img src="{{ asset('landing/assets/img/jacke.jpg') }}">
    </div>
    <div div class="contenedor">
        <h4>El Resplandor</h4>
        <h5>Stephen King</h5>
    <img src="{{ asset('landing/assets/img/el resplandor.jpg') }}">
    </div>
    <div div class="contenedor">
        <h4>Los Juegos de Hambre</h4>
        <h5>Lilly Collins</h5>
    <img src="{{ asset('landing/assets/img/hunger games.jpg') }}">
    </div>
    <div div class="contenedor">
        <h4>Juego de Tronos</h4>
        <h5>George R.R Martin</h5>
    <img src="{{ asset('landing/assets/img/game of thrones.jpg') }}">
    </div>
    <div div class="contenedor">
        <h4>Fuego y Sangre</h4>
        <h5>George R.R Martin</h5>
    <img src="{{ asset('landing/assets/img/casa_dragon.jpg') }}">
    </div>
    <div div class="contenedor">
        <h4>EL extraño caso de Dr jekyll y Mr Hide</h4>
        <h5>Robert Louis Stevenson</h5>
    <img src="{{ asset('landing/assets/img/dr_jekyll.jpg') }}">
    </div>
    <div div class="contenedor">
        <h4>Se lo que estas pensando</h4>
        <h5>John Verdon</h5>
    <img src="{{ asset('landing/assets/img/se_lo.jpg') }}">
    </div>

</div>




@endsection
