@extends('layouts.Nav_Publico')

@section('content')
<section class="site-section">

<div class="container">

  <div class="row justify-content-center rounded-3 p-4" style="background:rgba(236, 236, 236, 0.808);">

    <div class="col-lg-12 align-self-center mr-auto text-left heading-section mb-5">

        <div class="col-12 text-center">

            <i class="fas fa-paw fa-3x"></i>

        </div>

        <h2 class="text-black mb-4 text-center">{{ __('Registro') }}</h2>

        <form class="row g-3 needs-validation" novalidate method="POST" action="{{ route('register') }}">
            @csrf
            <div class="col-md-6">
                
                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nombre') }}</label>

                    <div class="form-outline">
                        <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name" value="{{ old('name') }}" required autocomplete="name" autofocus/>
                        <label for="name" class="form-label font-weight-bold">{{ __('Nombre') }}</label>
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    </div>
                
            </div>

            <div class="col-md-6">
                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail') }}</label>

                <div class="form-outline">
                    <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}" required autocomplete="email" />
                    <label for="email" class="form-label font-weight-bold">{{ __('E-Mail') }}</label>
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                </div>
            </div>

            <div class="col-md-6">
                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Contraseña') }}</label>

                <div class="form-outline">
                    <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" required autocomplete="new-password"/>
                    <label for="password" class="form-label font-weight-bold">{{ __('Contraseña') }}</label>
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                </div>

            </div>

            <div class="col-md-6">
                <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Contraseña') }}</label>

                <div class="form-outline">
                    <input type="password" class="form-control" id="password-confirm" name="password_confirmation" required autocomplete="new-password"/>
                    <label for="password-confirm" class="form-label font-weight-bold">{{ __('Confirme Contraseña') }}</label>
                </div>

            </div>

            <div class="col-12 align-items-center text-center">

                <button class="btn btn-primary col-5 m-1" type="submit">{{ __('Registrar') }}</button>

            </div>

        </form>
      
    </div>

  </div>

</div>

</section>
@endsection
