@extends('layouts.Nav_Cliente')

@section('content')
<center>
<div class="container-fluid">
    <div class="container">
        <div class="row">
            <form method="POST" action="{{route('UpdateUser' , $User->id)}}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="col-sm-9 col-md-10 col-lg-10 mx-auto" >
                    <div class="card card-signin my-10">
                        <div class="card-body">
                            <h3 class="card-title text-center">Editar mis datos</h3>
                            <div class="table-responsive">
                                <div class="container-fluid">
                                    <div class="form-row">

                                        <div class="form-group col-md-6">
                                        <label >Nombre</label>
                                        <input type="text" class="form-control" name="Nombre" id="Nombre" placeholder="Mi nombre" value="{{ $User -> name }}">
                                        </div>

                                        <div class="form-group col-md-6">
                                        <label >Primer apellido</label>
                                        <input type="text" class="form-control" name="Apellido" id="Apellido" placeholder="Primer Apellido" value="{{ $User -> apellido1 }}">
                                        </div>

                                        <div class="form-group col-md-6">
                                        <label >Segundo apellido</label>
                                        <input type="text" class="form-control" name="Apellido2" id="Apellido2" placeholder="Segundo Apellido" value="{{ $User -> apellido2 }}">
                                        </div>

                                        <div class="form-group col-md-6">
                                        <label >Telefono</label>
                                        <input type="text" class="form-control" name="Telefono" id="Telefono" placeholder="Telefono" value="{{ $User -> telefono }}">
                                        </div>

                                        <div class="form-group col-md-12">
                                            <label for="file">Imagen</label>
                                            <div class="form-group col-md-6">
                                                <img class="rounded-circle" src="{{ asset('/storage/Img/Img_User/'.$User['foto']) }}" alt="" width="150px" class="">
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