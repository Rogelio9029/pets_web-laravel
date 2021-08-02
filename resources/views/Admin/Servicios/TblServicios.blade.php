@extends('layouts.Nav_Admin')

@section('content')

<!-- Begin Page Content -->
<div class="container-fluid">
<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h4 class="m-0 text-uppercase font-weight-bold text-center">Servicios</h4>
    <div>
        <a href="{{route('Frm_AddServicios')}}"  class="btn btn-success m-0 btn-sm" role="button" >Agregar Servicio</a>
    </div>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>id</th>
            <th>Nombre Servicio</th>
            <th>Descripcion</th>
            <th>Costo</th>
            <th>Imagen</th>
            <th>Acciones</th>
          </tr>
        </thead>
        <tbody>
        @foreach ($Servicios as $Servicio)
        <tr>
            <td>{{ $Servicio -> id }}</td>
            <td>{{ $Servicio -> Nombre_Servicio }}</td>
            <td>{{ $Servicio -> Descripcion }}</td>
            <td>{{ $Servicio -> Costo }}</td>
            <td><img src="{{ asset('/storage/Img/Img_Servicios/'.$Servicio['Img']) }}" alt="" width="80px" class=""></td>
            <td>
              <a href="{{route('Frm_EditServicios' , $Servicio->id)}}" class="btn btn-success mb-1">Editar</a>
              <form method="POST" action="{{route('DeleteServicio' , $Servicio->id)}}">
              
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Eliminar</button>
              </form>
            </td>
            
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