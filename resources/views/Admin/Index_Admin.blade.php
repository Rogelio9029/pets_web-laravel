@extends('layouts.Nav_Admin')

@section('content')

<div class="container-fluid">
<div class="container">
  <div class="row">

    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-0 shadow">
        <a href="#">
          <img src="https://cdn.pixabay.com/photo/2015/08/11/23/13/employees-885338_960_720.jpg" class="card-img-top" alt="" height="170">
        </a>
        <div class="card-body text-center">
          <h5 class="card-title mb-0">Personal</h5>
          <div class="card-text text-black-50">Registro de personal</div>
        </div>
      </div>
    </div>

    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-0 shadow">
        <a href="{{route('TblServicios')}}">
          <img src="https://cdn.pixabay.com/photo/2015/05/28/14/53/ux-788002_960_720.jpg" class="card-img-top" alt="..." height="170">
        </a>
        <div class="card-body text-center">
          <h5 class="card-title mb-0">Servicios</h5>
          <div class="card-text text-black-50">Panel de servicios</div>
        </div>
      </div>
    </div>


    <!-- Team Member 3 -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-0 shadow">
        <a href="{{route('TblMascotas')}}">
          <img src="https://cdn.pixabay.com/photo/2017/08/07/18/57/dog-2606759_960_720.jpg" class="card-img-top" alt="..." height="170">
        </a>
        <div class="card-body text-center">
          <h5 class="card-title mb-0">Mascotas</h5>
          <div class="card-text text-black-50">Informacion de las mascotas</div>
        </div>
      </div>
    </div>


    <!-- Team Member 4 -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-0 shadow">
        <a href="{{route('TblUsuarios')}}">
          <img src="https://cdn.pixabay.com/photo/2017/03/13/17/26/ecommerce-2140603_960_720.jpg" class="card-img-top" alt="..." height="170">
        </a>
        <div class="card-body text-center">
          <h5 class="card-title mb-0">Clientes</h5>
          <div class="card-text text-black-50">Informacion de los clientes</div>
        </div>
      </div>
    </div>

    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-0 shadow">
        <a href="#">
          <img src="https://cdn.pixabay.com/photo/2017/07/28/23/18/coming-soon-2550190_960_720.jpg" class="card-img-top" alt="..." height="170">
        </a>
        <div class="card-body text-center">
          <h5 class="card-title mb-0">Proximamente</h5>
          <div class="card-text text-black-50">Aun no hay informacion</div>
        </div>
      </div>
    </div>

    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-0 shadow">
        <a href="#">
          <img src="https://cdn.pixabay.com/photo/2017/07/28/23/18/coming-soon-2550190_960_720.jpg" class="card-img-top" alt="..." height="170">
        </a>
        <div class="card-body text-center">
          <h5 class="card-title mb-0">Proximamente</h5>
          <div class="card-text text-black-50">Aun no hay informacion</div>
        </div>
      </div>
    </div>
  <!-- /.row -->

</div>
<!-- /.container -->

  



<div class="row">


</div>

@endsection