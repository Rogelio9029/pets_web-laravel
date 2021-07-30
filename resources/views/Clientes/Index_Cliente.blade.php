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
                    <img src="{{ asset('/storage/Img/Img_Mascotas/'.$mascota['imagen']) }}" class="card-img-top mt-3" alt="...">
                    <div class="card-body">
                        <h4 class="card-title text-center">{{ $mascota -> nombre_mascota }}</h4>
                        <figcaption class="blockquote-footer text-center"><cite title="Source Title">{{ $mascota -> Descripcion }}</cite></figcaption>
                    </div>
                    <div class="card-body text-center">
                    <a href="{{route('Frm_UpdateMascota' , $mascota->id)}}" class="btn btn-primary">Editar datos</a>
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