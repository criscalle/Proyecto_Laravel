<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('landing/assets/css/styles.css')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link href="{{asset('landing/assets/img/logo4.png')}}" rel="icon">
    <title>Library</title>
</head>

<body>
    <div class="container-form sign-up">
        <div class="welcome-back">
            <div class="message">
                <h2>Bienvenido a CMJ Biblioteca Virtual</h2>
                <p>Si ya tienes una cuenta por favor inicia sesion aqui</p>
                <a href="{{ route('login') }}" id="login">Iniciar sesion</a>
            </div>
        </div>
        <form  class="formulario">
        @csrf
            <h2 class="create-account">Crear una cuenta</h2>
            <div class="iconos">
                    <img src="{{ asset('landing/assets/img/logo4.png') }}" width="120px" class="logo">
            </div>
            <br>
            <a href="{{ route('register') }}" class="sign-in-btn">Registrarse</a>
        </form>
    </div>
    <div class="container-form sign-in">
        <form action="{{ route('login') }}" method="post" class="formulario">
        @csrf
            <h2 class="create-account">Iniciar Sesion</h2>
            <div class="iconos">
            <img src="{{ asset('landing/assets/img/logo4.png') }}" width="120px">
            </div>
            <p class="cuenta-gratis">¿Aun no tienes una cuenta?</p>
            <input type="email" name="email" id="email" placeholder="Email" required>
            <input type="password" name="password" id="password" placeholder="Contraseña" required>
            <div class="text-center"><button type="submit">Ingresar</button></div>
        </form>
        <div class="welcome-back">
            <div class="message">
                <h2>Bienvenido de nuevo</h2>
                <p>Si aun no tienes una cuenta por favor registrese aqui</p>
                <a href="{{ route('register') }}" id="login">Registrarse</a>
            </div>
        </div>
    </div>

</body>
</html>