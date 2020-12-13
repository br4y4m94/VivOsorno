@extends('layouts.app')

@section('content')
        <div class="container-fluid p-5 propiedadPrincipal">
            <div class="row">
                <div class="col-8 fotoPro">
                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                          <div class="carousel-item active">
                            <img class="d-block w-100" src="{{asset('imagenes\depa.jpg')}}" style="height: 442px" alt="First slide">
                          </div>
                          <div class="carousel-item">
                            <img class="d-block w-100" src="http://placehold.it/800x400" alt="Second slide">
                          </div>
                          <div class="carousel-item">
                            <img class="d-block w-100" src="http://placehold.it/800x400" alt="Third slide">
                          </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="sr-only">Next</span>
                        </a>
                      </div>
                </div>
                <div class="col-4 infoPro pt-5 pl-5">
                    <div class="row">
                      <label for="tipoPropiedad" class="text-muted">Departamento</label>  
                    </div>
                    <div class="row">
                        <h1>Nombre departamento</h1><br>
                    </div>
                    <div class="row">
                        <h2>UF 1</h2><br>
                    </div> 
                    <div class="row">
                      <label for="montoPropiedad" class="text-muted" style="font-size: 2rem">$100.000</label>  
                    </div>

                    <div class="row">
                        <div class="col-12 mt-5">
                            <a target="_blank" href="https://www.google.com/maps/place/Casino+Marina+del+Sol+Osorno/@-40.5749302,-73.138183,17z/data=!4m13!1m7!3m6!1s0x9616367d12e3d8d5:0xa1eeda2f4774e6f4!2sOsorno,+Los+Lagos!3b1!8m2!3d-40.5761897!4d-73.1149469!3m4!1s0x9616368d6dd15ae7:0xd7386684ed0e6408!8m2!3d-40.5754183!4d-73.1456852" class="">Abrir Ubicación en el Mapa</a> 
                        </div>
                        <div class="col-12">
                            <div class="btnReportar">
                                <a href="" class="btn btn-secondary mt-5" style="width: 10.2rem">Agregar a Favoritos</a> 
                            </div> 
                        </div>
                        <div class="col-12">
                            <div class="btnReportar">
                                <a href="" class="btn btn-secondary mt-2" style="width: 10.2rem">Reportar</a> 
                            </div> 
                        </div>              
                    </div>
                    
                    
                </div>
            </div>
        </div>

        <div class="desc pt-5">
            <h2 class="pl-5 mt-5">Descripcion</h2>
        </div>

        <div class="container-fluid" >
            <div class="row">
                <div class="col-6 descripcion_Propiedad ml-5 pb-5">

                </div>
            </div>
            
        </div>

@endsection