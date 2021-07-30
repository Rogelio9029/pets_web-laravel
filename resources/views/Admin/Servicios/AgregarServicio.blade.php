@extends('layouts.Nav_Admin')

@section('content')
<center>
<div class="container-fluid">
    <div class="container">
        <div class="row">

            <form method="POST" action="{{route('AddServicios')}}" enctype="multipart/form-data">
            {{ csrf_field() }}
                <div class="col-sm-9 col-md-10 col-lg-10 mx-auto" >
                    <div class="card card-signin my-10">
                        <div class="card-body">
                            <h3 class="card-title text-center">Agregar Servicio</h3>
                            <div class="table-responsive">
                                <div class="container-fluid">
                                    <div class="form-row">

                                        <div class="form-group col-md-6">
                                        <label >Nombre del Servicio</label>
                                        <input type="text" class="form-control" name="Servicio" id="Servicio" placeholder="Nombre del servicio">
                                        </div>

                                        <div class="form-group col-md-6">
                                        <label >Descripcion del Servicio</label>
                                        <input type="text" class="form-control" name="Descripcion" id="Descripcion" placeholder="Descripcion del servicio">
                                        </div>

                                        <div class="form-group col-md-6">
                                        <label >Costo del servicio</label>
                                        <input type="text" class="form-control" name="Costo" id="Costo" placeholder="Costo del servicio">
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label for="file">Imagen</label>
                                            <input type="file" class="form-control-file" id="file" name="file">
                                        </div>
                                        
                                    </div>
                                    <a href="{{route('TblServicios')}}"  class="btn btn-dark">Regresar</a>
                                    <button type="submit" class="btn btn-primary">Agregar</button>
                        
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>
    <div class="row">
</div>
@endsection