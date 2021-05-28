@extends('layouts.Nav_Publico')

@section('content')
<section class="site-section">
    <div class="container pt-4">
        <div class="row justify-content-center rounded-3 p-4" style="background:rgba(236, 236, 236, 0.808);">
        <div class="col-lg-4 d-sm-none d-md-block text-left heading-section mb-4"  data-aos="fade-up" data-aos-delay="100">
                      <img src="/Public_design/Img/Icons/perro.png" alt="Image" class="img-fluid">
          
        </div>
        <div class="col-lg-8 align-self-center mr-auto text-left heading-section mb-5">
                    <h2 class="text-black mb-4 text-center">{{ __('Verify Your Email Address') }}</h2>

                    <div class="card-body">
                        @if (session('resent'))
                            <div class="alert alert-success" role="alert">
                                {{ __('A fresh verification link has been sent to your email address.') }}
                            </div>
                        @endif

                        {{ __('Before proceeding, please check your email for a verification link.') }}
                        {{ __('If you did not receive the email') }},
                        <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                            @csrf
                            <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('click here to request another') }}</button>.
                        </form>
                    </div>
        </div>
    </div>
</section>
@endsection
