


<link rel="stylesheet" href="{{asset('landing/assets/css/styles.css')}}">   
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"></div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}" class="formulario">
                        @csrf
                        <h2 class="create-account">Iniciar Sesion</h2>
                        <div class="iconos">
            <img src="{{ asset('landing/assets/img/logo4.png') }}" width="120px">
            </div>
            <br>
                        <div class="row mb-3">
                            

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Contraseña">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Iniciar Sesion') }}   
                                </button>
                            </div>
                        </div>
                        <br>
                        <a href="{{ route('register') }}" id="login">Registrarse</a>
                        </div>
                    
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

