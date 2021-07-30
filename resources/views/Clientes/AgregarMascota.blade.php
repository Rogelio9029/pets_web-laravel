@extends('layouts.Nav_Cliente')

@section('content')
<center>
<div class="container-fluid mb-4">
    <div class="container">
        <div class="row">

            <div class="alert alert-warning mx-auto" role="alert">
                <h4 class="alert-heading">Importante</h4>
                <p>Favor de indicar si su mascota es agresiva en la descripcion para evitar inconvenientes en futuras ocaciones</p>
            </div>

            <form method="POST" action="{{route('AddMascota')}}" enctype="multipart/form-data">
            {{ csrf_field() }}
                <div class="col-sm-9 col-md-10 col-lg-10 mx-auto" >
                    <div class="card card-signin my-10">
                        <div class="card-body">
                            <h3 class="card-title text-center">Agregar Mascota</h3>
                            <div class="table-responsive">
                                <div class="container-fluid">
                                    <div class="form-row">

                                        <div class="form-group col-md-6">
                                        <label >Nombre de la mascota</label>
                                        <input type="text" class="form-control" name="Nombre" id="Nombre" placeholder="Nombre de la mascota">
                                        </div>

                                        <div class="form-group col-md-6">
                                        <label >Edad de la mascota</label>
                                        <input type="text" class="form-control" name="Edad" id="Edad" placeholder="Edad de la mascota">
                                        </div>

                                        <div class="form-group col-md-6">
                                        <label >Peso de la mascota</label>
                                        <input type="text" class="form-control" name="Peso" id="Peso" placeholder="Peso de la mascota">
                                        </div>

                                        <div class="form-group col-md-6">
                                        <label >Raza de la mascota</label>
                                        <input type="text" class="form-control" name="Raza" id="Raza" placeholder="Raza de la mascota">
                                        </div>

                                        <div class="form-group col-md-12">
                                        <label >Descripcion de la mascota</label>
                                        <textarea  rows="5" type="text" class="form-control" name="Descripcion" id="Descripcion" placeholder="Descripcion de la mascota" ></textarea>
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label for="file">Imagen</label>
                                            <input type="file" class="form-control-file" id="file" name="file">
                                        </div>
                                        
                                    </div>
                                    <a href="{{route('Sesion')}}"  class="btn btn-dark">Cancelar</a>
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