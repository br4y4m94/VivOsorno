@extends('layouts.app')

@section('content')
    <div class="container divPerfil">
        <div class="row">
            <div class="col-4 colPestanas">
                <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <a class="nav-link active pestanas" id="v-pills-info-personal-tab" data-toggle="pill" href="#v-pills-info-personal" role="tab" aria-controls="v-pills-info-personal" aria-selected="true"><h3>Informacion Personal</h3></a>
                    <a class="nav-link pestanas" id="v-pills-propiedades-tab" data-toggle="pill" href="#v-pills-propiedades" role="tab" aria-controls="v-pills-propiedades" aria-selected="false"><h3>Propiedades</h3></a>
                    <a class="nav-link pestanas" id="v-pills-mensajes-tab" data-toggle="pill" href="#v-pills-mensajes" role="tab" aria-controls="v-pills-mensajes" aria-selected="false"><h3>Mensajes</h3></a> 
                  </div>
            </div>
            <div class="col-8">
                <div class="tab-content" id="v-pills-tabContent">
                    <div class="tab-pane fade show active" id="v-pills-info-personal" 
                    role="tabpanel" aria-labelledby="v-pills-info-personal-tab">

                        <div class="datos ml-5 mt-5">
                            <table class="table">
                                <thead class="thead" style="background-color:#709E7B; color:white;">
                                  <tr>
                                    <th scope="col">Datos</th>
                                    <th scope="col">Valores</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <th scope="row">Rut</th>
                                    <td>{{$datosPersonales->rut}}</td>
                                  </tr>
                                  <tr>
                                    <th scope="row">Nombres</th>
                                    <td>{{$datosPersonales->name}}</td>
                                  </tr>
                                  <tr>
                                    <th scope="row">Apellido Paterno</th>
                                    <td>{{$datosPersonales->apePaterno}}</td>   
                                  </tr>
                                  <tr>
                                    <th scope="row">Apellido Materno</th>
                                    <td>{{$datosPersonales->apeMaterno}}</td>
                                  </tr>
                                  <tr>
                                    <th scope="row">Email</th>
                                    <td>{{$datosPersonales->email}}</td>
                                  </tr>
                                  <tr>
                                    <th scope="row">Teléfono</th>
                                    <td>+56 {{$datosPersonales->telefono}}</td>
                                  </tr>
                                  <tr>
                                    <th scope="row"></th>
                                    <td><a href="{{route('propiedad.actualizar')}}" class="btn btn-secondary">Editar</a></td>
                                  </tr>
                                </tbody>
                              </table> 
                        </div>   

                        <div class="row">
        
                        </div>
                    
                    </div>
                    <div class="tab-pane fade" id="v-pills-propiedades" role="tabpanel" aria-labelledby="v-pills-propiedades-tab">
                        <div class="row">
                            @foreach ($propiedades as $item)
                            <div class="card" style="width: 60rem">
                              <div class="card-header">

                                @php
                                  $idPropiedad = $item->id;    
                                @endphp
                                
                                @switch($item->categoria_id)
                                    @case(1)
                                        <h3>Venta</h3>
                                        @break
                                    @case(2)
                                      <h3>Arriendo</h3>
                                        @break
                                    @default   
                                @endswitch
                                <label for="">{{$item->propiedadNombre}}</label>   
                              </div>
                              <div class="card-body">
                                <div class="row">
                                  <div class="col-4">
                                      <div class="p-2">
                                          <img src="{{ asset('Imagenes\depa.jpg')}}" alt="" style="width: 200px;height: 100px;border: 0.2px solid black">
                                      </div>
                                  </div>
                                  <div class="col-4">
                                      <div class="row">
                                          <p class="mt-2">{{$item->propiedadDesc}}</p>
                                      </div>
                                  </div>
                                  <div class="col-4">
                                      <div class="row">
                                          <div class="botonesCrud mt-5">
                                              <a href="{{ route('vistaPropiedad')}}" class="btn btn-secondary mt-4">Ver</a>
                                              <a href="" class="btn btn-secondary mt-4">Editar</a>
                                              <a href="" class="btn btn-secondary mt-4">Eliminar</a>
                                          </div>
                                      </div>
                                  </div>  
                                </div>
                              </div>
                            </div>
                            @endforeach
                            <div class="row">
                              
                            </div>
                        </div>
                      
                    </div>
                    
                    
                      
                    <div class="tab-pane fade" id="v-pills-mensajes" role="tabpanel" aria-labelledby="v-pills-mensajes-tab">
                        <div class="row">
                            <div class="card" style="width: 60rem">
                                <div class="card-header">
                                  Mensaje 1
                                </div>
                                <div class="card-body">
                                  <div class="row">
                                    <div class="col-4">
                                        <h5>Asunto</h5>
                                        <div class="row">
                                            <p class="mt-3 ml-3">Descripcion</p>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        
                                    </div>
                                    <div class="col-4">
                                        <div class="row">
                                            <div class="botonesCrud mt-5">
                                                <a href="" class="btn btn-secondary mt-4">Ver</a>
                                                <a href="" class="btn btn-secondary mt-4">Eliminar</a>
                                            </div>
                                        </div>
                                    </div>  
                                  </div>
                                </div>
                              </div>
                        </div>
                    </div>  
                </div>
            </div>
        </div>
    </div>
@endsection


