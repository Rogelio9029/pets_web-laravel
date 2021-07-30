@extends('layouts.Nav_Publico')

@section('content')
            <section class="site-section bg-light">
                <div class="container">
                        <main>
                            <div class="py-5 text-center">
                                <img class="d-block mx-auto mb-4" src="/Imagenes_pagina/perro_buy.png" alt="" width="150" height="170">
                            </div>
                            <form method="POST" action="{{route('Cita', $Servicio->id)}}" id="FormularioCitas" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                <div class="row g-5">
                                    <div class="col-md-5 col-lg-4 order-md-last">
                                        <h4 class="d-flex justify-content-between align-items-center mb-3">
                                        <span class="text-primary">Agendar cita</span>
                                        </h4>
                                        <ul class="list-group mb-3">
                                            <li class="list-group-item d-flex justify-content-between lh-sm">
                                                <div>
                                                <h6 class="my-0">{{ $Servicio -> Nombre_Servicio}}</h6>
                                                <small class="text-muted">{{ $Servicio -> Descripcion }}</small>
                                                </div>
                                                <span class="text-muted">${{ $Servicio -> Costo }}.00</span>
                                            </li>
                                            <li class="list-group-item d-flex justify-content-between bg-light">
                                                <div class="text-success">
                                                <h6 class="my-0">Descuento</h6>
                                                </div>
                                                <span class="text-success">−$0.00</span>
                                            </li>
                                            <li class="list-group-item d-flex justify-content-between" id="costo" value="{{ $Servicio -> Costo }}">
                                                <span>Total (MXN)</span>
                                                <strong >${{ $Servicio -> Costo }}.00</strong>
                                            </li>

                                            <div class="input-group mt-5">
                                                <a href="{{ route('Servicios') }}" class="btn btn-danger w-100">Cancelar</a>
                                            </div>
                                        </ul>
                                    </div>

                                    <div class="col-md-7 col-lg-8">
                                    
                                        <h4 class="mb-3">Informacion del cliente</h4>
                                        <form class="needs-validation" novalidate>
                                        <div class="row g-3">
                                            <div class="col-sm-6">
                                                <label for="firstName" class="form-label">Nombre</label>
                                                <input type="text" class="form-control" name="firstName" id="firstName" value="{{ $Cliente -> name }}" required>
                                                <div class="invalid-feedback">
                                                    El nombre es requerido.
                                                </div>
                                            </div>

                                            <div class="col-sm-6">
                                                <label for="lastName" class="form-label">Apellido / Apellidos</label>
                                                <input type="text" class="form-control" name="lastName" id="lastName" value="{{ $Cliente -> apellido1 }} {{ $Cliente -> apellido2 }}" required>
                                                <div class="invalid-feedback">
                                                    Apellidos requeridos.
                                                </div>
                                            </div>

                                            <div class="col-6">
                                                <label for="country" class="form-label">Elija a su mascota</label>
                                                <select class="form-select" id="mascota" name="mascota" required>
                                                    <option value="">Elija...</option>
                                                    @foreach($Mascotas as $Mascota)
                                                            <option value="{{$Mascota -> id}}">{{$Mascota -> nombre_mascota}}</option>
                                                    @endforeach
                                                </select>
                                                <div class="invalid-feedback">
                                                    Error.
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <label for="fecha" class="form-label">Fecha de Cita</label>
                                                <input type="date" class="form-control" name="fecha" id="fecha">
                                                <div class="invalid-feedback">
                                                    Ingrese fecha valiada.
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <label for="email" class="form-label">Email <span class="text-muted">(Registrado)</span></label>
                                                <input type="email" class="form-control" name="email" id="email" value="{{ $Cliente -> email }}">
                                                <div class="invalid-feedback">
                                                    Ingrese un email valido.
                                                </div>
                                            </div>
                                            

                                            <div class="col-12">
                                                <label for="address" class="form-label">Telefono (Registrado)</label>
                                                <input type="number" class="form-control" id="telefono" name="telefono" value="{{ $Cliente -> telefono }}" required>
                                                <div class="invalid-feedback">
                                                    El telefono es requerido.
                                                </div>
                                            </div>

                                            <button type="submit" class="btn btn-primary">Continuar con el pago</button>
                                        
                                    </div>
                                    
                                    

                                    <!-- <hr class="my-4">

                                    <div class="w-100" id="paypal-payment-button"></div> -->
                                </div>
                            
                                </div>
                            </form>
                        </main>
                </div>
            </section>
            <!-- <script src="https://www.paypal.com/sdk/js?client-id=AWTyXYzsn23bWh8qobyRlKp3qt5YHCEzZPqeMrCT26a7To3Jlcjkj_UoUGyoN567nrTmOhxZC3UjzzPh&currency=MXN"></script> -->
            <script type="text/javascript" src="/Paypal/FrmPaypal.js"></script>
@endsection



