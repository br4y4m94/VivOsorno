@extends('layouts.app')

@section('content')
<div class="container mt-4 div_form_Propiedad">
    <div class="row" style="background-color: #709E7B; color:white">
      <h4 class="p-2">Ingrese Datos de la Propiedad</h4>
    </div>

    <form method="POST" action="/propiedad" class="mt-4 ml-4">
      @csrf

      <div class="row">
        <div class="col-6">
          <div class="row">
            <h3 class="mb-4"><u>Categorías</u></h3>
          </div>
          <div class="row">
            <div class="col-6 text-center">
              <div class="dropdown">
                <div class="">
                  <h5>¿Qué Desea Hacer?</h5>
                </div>               
                <select class="form-control" name="selecCategoria">
                    <option value="seleccione" disabled selected>--Seleccione--</option>
                    @foreach ($categorias as $item) 
                        <option value="{{$item->id}}" >{{$item->categoriaNombre}}</option>
                  @endforeach
                </select>
              </div>
            </div>
            <div class="col-6 text-center">
              <div class="dropdown ">
                <div class="">
                  <h5>¿Qué Tipo de Propiedad es?</h5>
                </div>
                <select class="form-control" name="selecTipo">
                    <option value="seleccione" disabled selected>--Seleccione--</option>
                    @foreach ($tipos as $item)
                        <option value="{{$item->id}}">{{$item->tipoPropiedad}}</option>  
                    @endforeach
                </select>
              </div>
            </div>
          </div>
          <div class="row">
            <h3 class="mt-4"><u>Datos</u></h3>
          </div>
          <div class="row">
            <div class="input-group input-group-sm mb-3 ">
              <div class="col-12">
                
                <h3 class="mt-4">{{ __('Nombre') }}</h3>
                <div class="">
                    <input id="propiedadNombre" type="text" class="form-control" name="propiedadNombre" value="{{ old('propiedadNombre') }}" 
                    onkeypress="return soloLetras(event);" maxlength="50"
                    required autocomplete="propiedadNombre" autofocus>
                    <p id="resultado_rut"></p>  
                </div>
    
    
                <h3 class="mt-4">{{ __('Precio') }}</h3>
                <div class="">
                    <input id="propiedadPrecio" type="text" class="form-control" name="propiedadPrecio" value="{{ old('propiedadPrecio') }}" 
                    onkeypress="return soloNumeros(event);" maxlength="9"
                    required autocomplete="propiedadPrecio" autofocus>
                    <p id="resultado_rut"></p>  
                </div> 
    
                
                <h3>{{ __('Número Rol') }}</h3>
                    <div class="">
                        <input id="propiedadNumRol" type="text" class="form-control" name="propiedadNumRol" value="{{ old('propiedadNumRol') }}" 
                         maxlength="8"
                        required autocomplete="propiedadNumRol" autofocus>
                        <p id="resultado_rut"></p>  
                    </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-6">
          <div class="row">
            <h3 class=""><u>Dirección</u></h3>
          </div>
          <div class="row">
            <div class="input-group input-group-sm mb-3 ">
              <div class="col-12">
                <div class="" style="margin-top: 2.8rem">
                    <input id="propiedadDireccion" type="text" class="form-control" name="propiedadDireccion" value="{{ old('propiedadDireccion') }}" 
                    onkeypress="return soloLetras(event);" maxlength="50"
                    required autocomplete="propiedadDireccion" autofocus>
                    <p id="resultado_rut"></p>  
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <h3 class=""><u>Descripción</u></h3>
          </div>
          <div class="row">
            <div class="input-group input-group-sm mb-3 ml-3">
              <h3 class="mt-3">{{ __('Realice una breve Descripción') }}</h3>
              <div class="form-group">
                <textarea class="form-control" name="propiedadDesc" id="propiedadDesc" rows="4" maxlength="50" style="width: 32.7rem"></textarea>    
              </div> 
            </div>
          </div>
        </div>
      </div>
      <div class="row mb-4">
        <button class="btn btn-secondary   m-auto" type="submit">Registrar Propiedad</button>
      </div>

        
    </form>

</div>


@endsection


