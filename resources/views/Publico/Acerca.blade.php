@extends('layouts.Nav_Publico')

@section('content')


<section class="site-blocks-cover bg-light">

<div class="container">

</br>

    <div class="row justify-content-center">

         <div class="col-md-12 align-items-end row">
               <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('home')}}">Inicio</a></li>
                <li class="breadcrumb-item active" aria-current="page">Nosotros</li>
             </ol>
            </nav>
        </div>


        <div class="col-md-6 align-self-center">




            <div class="col-12 text-center ml-4">
                <i class="fas fa-paw fa-3x"></i>
            </div>

            <h2 class="text-black text-left display-4 font-weight-bold">
                Acerca de nosotros
            </h2>
            <p class="text-left text-black">Somos una empresa completamente profesional y dedicada al cuidado de su mascota
                en ausencia de su dueño, brindandole un servicio de calidad que pueda ser de mucha ayuda en todo momento que se requiera, tenemos
                como proposito especial, brindar todo el cuidado, atencion y amor que merece su mascota durante el tiempo que se
                encuentre con nosotros logrando mantener a su mascota comoda y con la confianza que tiene como si estuviera con su dueño,
                por lo que estamos seguros de que somos su mejor opcion.
            </p>

        </div>

        <div class="col-md-5 align-self-center text-center text-md-right">
            <img
              src="https://www.nationalgeographic.com.es/medio/2019/09/09/bull-dog-ingles_043b09e1_800x800.jpg"
              alt="Image"
              class="img-fluid"
              width="500"
            >
        </div>

    </div>

</div>

</section>


@endsection
