@extends('layouts.Nav_Cliente')

@section('content')
<center>
            <section class="site-section bg-light" >
                <div class="container col-md-6">
                    <main>
                    <form method="GET" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="card">
                            <div class="card-header">
                                Pagar
                            </div>
                            <div class="card-body">
                            <ul class="list-group mb-3">
                                <div>
                                    <li id="costo" value="{{ $Servicio -> Costo }}" class="list-group-item lh-sm">
                                        <h3 class="card-title">Monto a pagar:  ${{ $Servicio -> Costo }}.00 MXN</h3>
                                        <p class="card-text">Servicio seleccionado: {{ $Servicio -> Nombre_Servicio }}</p>
                                    </li>
                                    <li id="cita" value="{{ $cita -> id }}" class="list-group-item">
                                        <p>Numero de cita: {{ $cita -> id }}</p>
                                        <p>Fecha de la cita: {{ $cita -> fecha_cita }}</p>
                                    </li>
                                </div>
                            </ul>
                                <hr class="my-4">
                                <div class="w-100" id="paypal-payment-button"></div>
                            </div>
                        </div>
                    <form>
                        
                    </main>
                </div>
            </section>
            <script src="https://www.paypal.com/sdk/js?client-id=AWTyXYzsn23bWh8qobyRlKp3qt5YHCEzZPqeMrCT26a7To3Jlcjkj_UoUGyoN567nrTmOhxZC3UjzzPh&currency=MXN"></script>
            <script type="text/javascript" src="/Paypal/Paypal.js"></script>
</center>
@endsection