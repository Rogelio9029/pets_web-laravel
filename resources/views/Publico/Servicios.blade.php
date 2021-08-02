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

<!--     
    <div class="row justify-content-center">
        @foreach ($Servicios as $Servicio)
            <div class="card col-xl-3 col-md-6 mb-4" style="width: 16rem; display: flex; background:rgba(236, 236, 236, 0.808);">
                    <div class="card rounded-3 mb-3 mt-3 shadow-sm " style="display: flex; " >
                        <img src="{{ asset('/storage/Img/Img_Servicios/'.$Servicio['Img']) }}" class="card-img-top w-60"  style="width: 15rem; height: 10rem" >
                        <div class="card-body" style="">
                            <h5 class="card-title text-center">{{ $Servicio -> Nombre_Servicio }}</h5>
                            <p class="card-text text-center">{{ $Servicio -> Descripcion }}</p>
                            <h4 class="card-title pricing-card-title text-center" style="">${{ $Servicio -> Costo }}.00 MXN</h4>
                            
                            <a type="button" href="{{route('FrmCita' , $Servicio->id)}}" class="w-100 btn" style="background-color: #0099ff; color: white;">Solicitar</a>
                        </div>
                        
                    </div>
            </div>
        @endforeach 
    </div> -->
    
    <!-- <div class="row align-items-center" style = 'background:rgba(236, 236, 236, 0.808);'> -->
    
        <div class="row row-cols-1 row-cols-md-3 g-4">
            @foreach ($Servicios as $Servicio)
                <div class="col col-md-3">
                    <div class="card p-2 h-100">
                        <div class="card-body text-center justify-content-center">
                            <img src="{{ asset('/storage/Img/Img_Servicios/'.$Servicio['Img']) }}" class="card-img-top w-60"  style="width: 15rem; height: 10rem" >
                            <div class="card-body">
                                <h5 class="card-title text-center">{{ $Servicio -> Nombre_Servicio }}</h5>
                                <p class="card-text text-center">{{ $Servicio -> Descripcion }}</p>
                                <h4 class="card-title pricing-card-title text-center" style="">${{ $Servicio -> Costo }}.00 MXN</h4>              
                            </div>
                        </div>
                        <div class="card-footer">
                            <a type="button" href="{{route('FrmCita' , $Servicio->id)}}" class="w-100 btn" style="background-color: #0099ff; color: white;">Solicitar</a>
                        </div>
                    </div>
                </div>
            @endforeach 
        </div>

        <!-- <div class="col-4 col-sm-3 m-3 d-flex">
            <div class="card" style="width: 18rem;">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
        <div class="col-4 col-sm-3 m-3 d-flex">
            <div class="card" style="width: 18rem;">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card titadadadadadadadadadadale and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div> -->
    <!-- </div> -->
      
    
</div>

</section>


@endsection