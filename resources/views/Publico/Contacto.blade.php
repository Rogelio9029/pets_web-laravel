@extends('layouts.Nav_Publico')

@section('content')



<section class="site-section bg-light">
    
<br>
<div class="container">
    <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('home')}}">Inicio</a></li>
                <li class="breadcrumb-item active" aria-current="page">Contactos</li>
              </ol>
            </nav>
  
    
    <div class="col-md-12 align-self-center p-4" style="background:rgba(236, 236, 236, 0.808);">
        
        
    <div class="mt-5 row justify-content-center">
        
        <div class="col-lg-6 text-center heading-section mb-5">

            <div class="col-12 text-center">

                <i class="fas fa-paw fa-3x"></i>

            </div>

            <h2 class="text-black mb-2">Contactanos</h2>
    
        </div>

    </div>

    <div class="row justify-content-center">

        <div class="col-md-5">

            <ul class="list-unstyled text-left address">

                <li>
                  <span class="d-block text-black-50">Direccion:</span>
                  <p>Colonia:Marcelo Vite, calle: Felipe Angeles, numero:18</p>
                </li>
                <li>
                  <span class="d-block text-black-50">Telefono:</span>
                  <p>7711017241</p>
                </li>
                <li>
                  <span class="d-block text-black-50">Correo Electronico:</span>
                  <p>servpetsweb@gmail.com</p>
                </li>
  
            </ul>

        </div>

        <div class="col-md-5 ml-auto">

            <ul class="list-unstyled text-left address">

                <li>
                  <span class="d-block text-black-50">Direccion:</span>
                  <p>Colonia:Marcelo Vite, calle: Felipe Angeles, numero:18</p>
                </li>
                <li>
                  <span class="d-block text-black-50">Telefono:</span>
                  <p>7711017241</p>
                </li>
                <li>
                  <span class="d-block text-black-50">Correo Electronico:</span>
                  <p>servpetsweb@gmail.com</p>
                </li>
  
            </ul>

        </div>
    
    </div>
        
    </div>
    


</div>

</section>


@endsection