@extends('layouts.Nav_Publico')

@section('content')
<section class="site-section">

                <div class="container">
          
                  <div class="row justify-content-center rounded-3 p-4" style="background:rgba(236, 236, 236, 0.808);">
          
                    <div class="col-lg-6 d-sm-none d-md-block text-left heading-section mb-5"  data-aos="fade-up" data-aos-delay="100">
                      <br>
                      <img src="/Public_design/Img/Icons/cama.png" alt="Image" class="img-fluid">
          
                    </div>
          
                    <div class="col-lg-6 align-self-center mr-auto text-left heading-section mb-5">
          
                        <div class="col-12 text-center">

                            <i class="fas fa-paw fa-3x"></i>

                        </div>
            
                        <h2 class="text-black mb-4 text-center">{{ __('Login') }}</h2>
                        
                        <form class="row g-3 needs-validation justify-content-center" novalidate method="POST" action="{{ route('login') }}">
                        @csrf
                            <div class="col-md-10">

                            
                                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail') }}</label>

                                <div class="form-outline">
                                    <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus />
                                    <label for="email" class="form-label font-weight-bold">{{ __('E-Mail') }}</label>
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            

                            <div class="col-md-10">
                            
                                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Contraseña') }}</label>
                                    <div class="form-outline">
                                        <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" required autocomplete="current-password" />
                                        <label for="password" class="form-label font-weight-bold">{{ __('Contraseña') }}</label>
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                            </div>


                            <div class="col-12 align-items-center text-center">

                                <button class="btn btn-primary col-10 m-1" type="submit">{{ __('Login') }}</button>
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Olvidaste tu contraseña?') }}
                                    </a>
                                @endif
                            </div>

                        </form>
                      
                    </div>
          
                  </div>
          
                </div>
          
            </section>
@endsection
