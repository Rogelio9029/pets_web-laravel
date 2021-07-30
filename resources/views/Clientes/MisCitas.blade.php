@extends('layouts.Nav_Cliente')

@section('content')
    <div class="container-fluid">
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
    <div class="card-header py-3">
        <h4 class="m-0 text-uppercase font-weight-bold text-center">Mis citas sin pagar</h4>
    </div>
    <div class="card-body">
        <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
            <tr>
                <th>Cita</th>
                <th>Fecha</th>
                <th>Estado</th>
                <th>Accion</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($Citas as $cita)
            <tr>
                <td>{{ $cita -> id }}</td>
                <td>{{ $cita -> fecha_cita }}</td>
                <td>{{ $cita -> estado }}</td>
                <td>
                <a href="{{route('Pagar' , $cita->id)}}" class="btn btn-success mb-1">Pagar</a>
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
    <!-- Tabla 2 -->
    <div class="container-fluid">
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
    <div class="card-header py-3">
        <h4 class="m-0 text-uppercase font-weight-bold text-center">Mis citas pagadas</h4>
    </div>
    <div class="card-body">
        <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
            <tr>
                <th>Cita</th>
                <th>Fecha</th>
                <th>Estado</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($Pagadas as $Pagada)
            <tr>
                <td>{{ $Pagada -> id }}</td>
                <td>{{ $Pagada -> fecha_cita }}</td>
                <td>{{ $Pagada -> estado }}</td>
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