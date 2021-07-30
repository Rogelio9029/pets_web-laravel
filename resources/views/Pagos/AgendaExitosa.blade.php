@extends('layouts.Nav_Publico')

@section('content')
    <section class="site-section">

        <div class="container">

            <div class="row justify-content-center rounded-3 p-4" style="background:rgba(236, 236, 236, 0.808);">

                <div class="col-lg-6 d-sm-none d-md-block text-left heading-section mb-5"  data-aos="fade-up" data-aos-delay="100">
                <br>
                <img src="/Public_design/Img/Icons/cama.png" alt="Image" class="img-fluid">

                </div>

                <div class="col-lg-6 align-self-center mr-auto text-left heading-section mb-5">

                    <div class="col-12 text-center">

                        <i class="fas fa-paw fa-3x"></i>

                    </div>

                    <h2 class="text-black mb-4 text-center">Agenda Exitosa</h2>
                    
                    <!-- <form class="row g-3 needs-validation justify-content-center" novalidate> -->

                        <div class="col-12 align-items-center text-center">                            
                                <a class="btn btn-primary" href="{{route('MisCitas')}}">
                                    {{ ('Ir a mis citas') }}
                                </a>
                        </div>

                    <!-- </form> -->
                
                </div>

            </div>

        </div>

    </section>
@endsection