@extends('layouts.Nav_Cliente')

@section('content')
<center>
<div class="container-fluid">
    <div class="container">
        <div class="row">
            <form method="POST" action="{{route('UpdateMascota' , $Mascota->id)}}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="col-sm-9 col-md-10 col-lg-10 mx-auto mb-4" >
                    <div class="card card-signin my-10">
                        <div class="card-body">
                            <h3 class="card-title text-center">Editar datos</h3>
                            <div class="table-responsive">
                                <div class="container-fluid">
                                    <div class="form-row">

                                        <div class="form-group col-md-6">
                                        <label >Nombre</label>
                                        <input type="text" class="form-control" name="Nombre" id="Nombre" placeholder="Mi nombre" value="{{ $Mascota -> nombre_mascota }}"/>
                                        </div>

                                        <div class="form-group col-md-6">
                                        <label >Edad</label>
                                        <input type="text" class="form-control" name="Edad" id="Edad" placeholder="Edad" value="{{ $Mascota -> edad }}"/>
                                        </div>

                                        <div class="form-group col-md-6">
                                        <label >Peso en Kg</label>
                                        <input type="text" class="form-control" name="Peso" id="Peso" placeholder="Peso" value="{{ $Mascota -> peso }}"/>
                                        </div>

                                        <div class="form-group col-md-6">
                                        <label >Raza</label>
                                        <input type="text" class="form-control" name="Raza" id="Raza" placeholder="Raza" value="{{ $Mascota -> raza }}"/>
                                        </div>

                                        <div class="form-group col-md-6">
                                        <label >Descripcion</label>
                                        <textarea  rows="5" type="text" class="form-control" name="Descripcion" id="Descripcion" placeholder="Descripcion de la mascota" >{{ $Mascota -> Descripcion }}</textarea>
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label for="file">Foto</label>
                                            <div class="form-group col-md-6">
                                                <img class="rounded" src="{{ asset('/storage/Img/Img_Mascotas/'.$Mascota['imagen']) }}" alt="" width="150px" class=""/>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <input type="file" class="form-control-file" id="file" name="file">
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <a href="{{route('Sesion')}}"  class="btn btn-dark">Regresar</a>
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
    <div class="row">
</div>
@endsection