@extends('layouts.Nav_Publico')

@section('content')


<section class="site-section bg-light">

<br>
<div class="container">
    
   <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('home')}}">Inicio</a></li>
                <li class="breadcrumb-item active" aria-current="page">Servicios</li>
              </ol>
            </nav>

    <div class="mt-5 row justify-content-center" data-aos="fade-up" data-aos-delay="100">
        
        <div class="col-lg-6 text-center heading-section mb-5">

            <div class="col-12 text-center">

                <i class="fas fa-paw fa-3x"></i>

            </div>

        <h2 class="text-black mb-2">Nuestros servicios</h2>
           <h3>
           Contamos con una variedad de servicios que seran de agrado tanto para el dueño de la mascota como para la mascota.
        
          </h3>
           <h1>1.- Higiene. 2.- Alimentacion. 3.- Guarderia.</h1>
    
        </div>

    </div>

    
    <div class="row justify-content-center ">
    @foreach ($Servicios as $Servicio)
        <div class="card col-xl-3 col-md-6 mb-4" style="width: 16rem; background:rgba(236, 236, 236, 0.808);">
                <div class="card rounded-3 shadow-sm">
                    <img src="{{ asset('/storage/Img/Img_Servicios/'.$Servicio['Img']) }}" class="card-img-top" height="50px">
                    <div class="card-body">
                        <h5 class="card-title text-center">{{ $Servicio -> Nombre_Servicio }}</h5>
                        <p class="card-text text-center">{{ $Servicio -> Descripcion }}</p>
                        <h4 class="card-title pricing-card-title text-center" style="">${{ $Servicio -> Costo }}.00 MXN</h4>
                        
                        <a type="button" href="{{route('FrmCita' , $Servicio->id)}}" class="w-100 btn" style="background-color: #0099ff; color: white;">Solicitar</a>
                    </div>
                    
                </div>
        </div>
    @endforeach 

     
    </div>
    

      
    
</div>

</section>


@endsection