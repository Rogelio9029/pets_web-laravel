@extends('layouts.Nav_Admin')

@section('content')

<!-- Begin Page Content -->
<div class="container-fluid">
<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h4 class="m-0 text-uppercase font-weight-bold text-center">Mascotas registradas</h4>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>Cliente</th>
            <th>Email</th>
            <th>Telefono</th>
            <th>Mascota</th>
            <th>Imagen</th>
          </tr>
        </thead>
        <tbody>
        @foreach ($Mascotas as $Mascota)
        <tr>
            <td>{{ $Mascota -> name }}</td>
            <td>{{ $Mascota -> email }}</td>
            <td>{{ $Mascota -> telefono }}</td>
            <td>{{ $Mascota -> nombre_mascota }}</td>
            <td><img src="{{ asset('/storage/Img/Img_Mascotas/'.$Mascota->imagen) }}" class="img-fluid rounded mx-auto" width="120px" height="80px"></td>
        </tr>
        @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>

</div>

</div>

@endsection