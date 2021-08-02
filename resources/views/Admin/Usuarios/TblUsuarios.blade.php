@extends('layouts.Nav_Admin')

@section('content')

<!-- Begin Page Content -->
<div class="container-fluid">
<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h4 class="m-0 text-uppercase font-weight-bold text-center">Usuarios registrados</h4>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>Cliente</th>
            <th>Email</th>
            <th>Telefono</th>
          </tr>
        </thead>
        <tbody>
        @foreach ($Usuarios as $Usuario)
        <tr>
            <td>{{ $Usuario -> name }}</td>
            <td>{{ $Usuario -> email }}</td>
            <td>
            @if($Usuario -> telefono == null)
            
              No tiene telefono registrado
            
            @else
            
              {{ $Usuario -> telefono }}
            
            @endif
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