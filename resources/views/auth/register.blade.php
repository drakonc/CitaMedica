@extends('layouts.form')
@section('title','Registrate')
@section('content')
<div class="container mt--8 pb-5">
    <div class="row justify-content-center">
      <div class="col-lg-6 col-md-8">
        <div class="card bg-secondary shadow border-0">
          <div class="card-body px-lg-5 py-lg-5">
            @if($errors->any())
              <div class="text-center text-muted mb-2">
                <h4>Se Encontro el Siguiente Error.</h4>
              </div>
              <div class="alert alert-danger mb-4" role="alert">
                {{ $errors->first() }}
              </div>
            @else
              <div class="text-center text-muted mb-4">
                <small>Ingresa Los Datos a Reguistrar </small>
              </div>
            @endif 
            <form method="POST" action="{{ route('register') }}">
              @csrf
              <div class="form-group">
                <div class="input-group input-group-alternative mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                  </div>
                  <input id="name" class="form-control @error('name') is-invalid @enderror" placeholder="Nombre" type="text" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                </div>
              </div>
              <div class="form-group">
                <div class="input-group input-group-alternative mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                  </div>
                  <input id="email" class="form-control  @error('email') is-invalid @enderror" placeholder="Correo Electronico" type="email" name="email" value="{{ old('email') }}" required autocomplete="email">
                </div>
              </div>
              <div class="form-group">
                <div class="input-group input-group-alternative">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                  </div>
                  <input id="password" class="form-control @error('password') is-invalid @enderror" placeholder="Contraseña" type="password" name="password" required autocomplete="new-password">
                </div>
              </div>
              <div class="form-group">
                <div class="input-group input-group-alternative">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                  </div>
                  <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirmacion de Contraseña" required autocomplete="new-password">
                </div>
              </div>
              <div class="text-center">
                <button type="submit" class="btn btn-primary mt-4">Registrarse</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
</div>
@endsection
