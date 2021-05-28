@extends('layouts.Nav_Publico')

@section('content')
<section class="site-section">
<div class="container pt-4">
    <div class="row justify-content-center rounded-3 p-4" style="background:rgba(236, 236, 236, 0.808);">
                    <div class="col-lg-4 d-sm-none d-md-block text-left heading-section mb-4"  data-aos="fade-up" data-aos-delay="100">
                      <img src="/Public_design/Img/Icons/perro.png" alt="Image" class="img-fluid">
          
                    </div>
            <div class="col-lg-8 align-self-center mr-auto text-left heading-section mb-5">
            <div class="col-12 text-center">

                <i class="fas fa-paw fa-3x"></i>

            </div>
                <h2 class="text-black mb-4 text-center">{{ __('Restablecer Contraseña') }}</h2>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Coloque su E-Mail') }}</label>

                            <div class="col-md-8">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Enviar link') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        
    </div>
</div>
</section>
@endsection
