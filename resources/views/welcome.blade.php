@extends('layouts.app')

@section('content')
    <div class="container p-0 mt-4 mb-4">
        <div class="card" style="width: 1000px; ; margin:auto;">
            <img class="imagenPortada position-relative" src="{{asset('imagenes\familia_casa3.jpg')}}" alt="" style="height: 500px">
            <div class="divBusqueda position-absolute mt-5">
                

                <div class="titulo-busqueda">
                    <h1 class="text-center">Realice su Búsqueda</h1>
                </div>
                <form method="POST" action="{{route('welcome')}}">
                    <div class="dropdownCategoria">
                        <div class="row">
                            <div class="col-6 text-center">
                                <div class="dropdown">
                                  <div class="">
                                    <h5>¿Qué Desea Hacer?</h5>
                                  </div>
                                  <select class="custom-select">
                                    <option value="seleccione" disabled selected>--Seleccione--</option>
                                    @foreach ($categorias as $item) 
                                        <option value="value" id="{{$item->id}}">{{$item->categoriaNombre}}</option>
                                    @endforeach
                                </select>
                                </div>
                              </div>
                              <div class="col-6 text-center">
                                <div class="dropdown">
                                    <div class="">
                                      <h5>¿Qué Desea Hacer?</h5>
                                    </div>
                                    <select class="custom-select">
                                      <option value="seleccione" disabled selected>--Seleccione--</option>
                                      @foreach ($tipo as $item) 
                                          <option value="value" id="{{$item->id}}">{{$item->tipoPropiedad}}</option>
                                      @endforeach
                                  </select>
                                  </div>
                              </div>
                        </div>
                    </div>
                    <div class="row mt-5 text-center">
                        <button class="btn btn-secondary btnBuscar" type="submit"> Buscar Ahora!</button>
                    </div>
                </form>
            </div>
        
        </div>
    </div>

    <div class="container cards_Mas_Buscados">
        <div class="row">
            <div class="col-6">
                <div class="card cards_Mas_Buscados" style="width: 18rem;">
                    <img class="card-img-top" src="http://placehold.it/286x180" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title">Casa</h5>
                      <p class="card-text">Casa de 4 Habitaciones ubicada en el centro de Osorno.
                        Ingresa Aquí para mayor Información
                      </p>
                      <a href="{{route('vistaPropiedad')}}" class="btn btn-secondary">Ver Publicación</a>
                    </div>
                </div>
                
            </div>
            <div class="col-6">
                <div class="card cards_Mas_Buscados" style="width: 18rem;">
                    <img class="card-img-top" src="http://placehold.it/286x180" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title">Departamento</h5>
                      <p class="card-text">Departamento de 2 Habitaciones ubicado en el centro de Osorno. 
                          Ingresa Aquí para mayor Información</p>
                      <a href="{{route('vistaPropiedad')}}" class="btn btn-secondary">Ver Publicación</a>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    
@endsection