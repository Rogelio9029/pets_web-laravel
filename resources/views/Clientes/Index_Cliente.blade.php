@extends('layouts.Nav_Cliente')

@section('content')

<div class="container-fluid">
<div class="container">
        <div class="paws text-center" style="color:black;"> 
            <i class="fas fa-paw fa-3x"><h2 class="text-black mb-2">Mis mascotas</h2></i>
        </div>
  <div class="row">
    @if($Num_Mascotas == 0)
    <div class="col-md-12 col-md-offset-1">
        <div class="alert alert-danger text-center" role="alert">
            <h4 class="alert-heading">Actualmente no cuenta con mascotas registradas</h4>
            <p>Puede registrar una mascota en el apartado de mascotas "Agregar mascota" en el lado izquierdo de la pantalla</p>
            <hr>
            <img src="/Public_design/Img/anime_triste.png" width="150px" alt="">
        </div>
    </div>
    @else
            @foreach ($mascotas as $mascota)
                <div class="card col-xl-3 col-md-6 mb-4">
                    <img src="{{ asset('/storage/Img/Img_Mascotas/'.$mascota['imagen']) }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title text-center">{{ $mascota -> nombre_mascota }}</h5>
                        <p class="card-text">{{ $mascota -> Descripcion }}</p>
                    </div>
                    <div class="card-body text-center">
                        <h6 class="card-title">Raza: {{ $mascota -> raza }}</h6>
                        <h6 class="card-title">Edad: {{ $mascota -> edad }}</h6>
                        <h6 class="card-title">Peso: {{ $mascota -> peso }}</h6>
                    </div>
                    <div class="card-body text-center">
                    <a href="#" class="btn btn-primary">Editar datos</a>
                    </div>
                </div>
            @endforeach
    @endif


  <!-- /.row -->

</div>
<!-- /.container -->

  



<div class="row">


</div>

@endsection