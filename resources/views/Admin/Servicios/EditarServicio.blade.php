@extends('layouts.Nav_Admin')

@section('content')

<center>
<div class="container-fluid">
    <div class="container">
        <div class="row">
            <form method="POST" action="{{route('EditServicios' , $Servicio->id)}}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
                <div class="col-sm-9 col-md-10 col-lg-10 mx-auto" >
                    <div class="card card-signin my-10">
                        <div class="card-body">
                            <h3 class="card-title text-center">Editar Servicio</h3>
                            <div class="table-responsive">
                                <div class="container-fluid">
                                    <div class="form-row">

                                        <div class="form-group col-md-6">
                                        <label >Nombre del Servicio</label>
                                        <input type="text" class="form-control" name="Servicio" id="Servicio" placeholder="Nombre del servicio" value="{{ $Servicio -> Nombre_Servicio }}">
                                        </div>

                                        <div class="form-group col-md-6">
                                        <label >Descripcion del Servicio</label>
                                        <input type="text" class="form-control" name="Descripcion" id="Descripcion" placeholder="Descripcion del servicio" value="{{ $Servicio -> Descripcion }}">
                                        </div>

                                        <div class="form-group col-md-6">
                                        <label >Costo del servicio</label>
                                        <input type="text" class="form-control" name="Costo" id="Costo" placeholder="Costo del servicio" value="{{ $Servicio -> Costo }}">
                                        </div>

                                        <div class="form-group col-md-12">
                                            <label for="file">Imagen</label>
                                            <div class="form-group col-md-6">
                                                <img src="{{ asset('/storage/Img/Img_Servicios/'.$Servicio['Img']) }}" alt="" width="150px" class="">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <input type="file" class="form-control-file" id="file" name="file">
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <a href="{{route('TblServicios')}}"  class="btn btn-dark">Regresar</a>
                                    <button type="submit" class="btn btn-primary">Editar</button>
                        
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
    </div>
</div>


@endsection