@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card mt-5 mb-5">
                <div class="card-header">{{ __('Actualizar Datos') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="input-group input-group-sm mb-3">
                            <div class="col-6">
                                <label for="rut" class="col-form-label text-md-right">{{ __('Rut') }}</label>
                                <div class="">
                                    <input id="rut" type="text" class="form-control" name="rut" value="{{ old('rut') }}" 
                                    onkeypress="return soloRut(event);" maxlength="10"
                                    required autocomplete="rut" autofocus>
                                    <p id="resultado_rut"></p>  
                                </div>
                            </div>
                            <div class="col-6">
                                <label for="name" class="col-form-label text-md-right">{{ __('Nombres') }}</label>
                                <div class="">
                                    <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" onkeypress="return soloLetras(event);" required autocomplete="name" autofocus>
                                    <p id="resultado_Nombre"></p>  
                                </div>
                            </div>
                        </div>
                        

                        <div class="input-group input-group-sm mb-3">
                            <div class="col-6">
                                <label for="apePaterno" class="col-form-label text-md-right">{{ __('Apellido Paterno') }}</label>
                                <div class="">
                                    <input id="apePaterno" type="text" class="form-control" name="apePaterno" value="{{ old('apePaterno') }}" onkeypress="return soloLetras(event);" required autocomplete="apePaterno" autofocus>
                                    <p id="resultado_apePaterno"></p> 
                                </div>
                            </div>
                            <div class="col-6">
                                <label for="apeMaterno" class="col-form-label text-md-right">{{ __('Apellido Materno') }}</label>
                                <div class="">
                                    <input id="apeMaterno" type="text" class="form-control " name="apeMaterno" value="{{ old('apeMaterno') }}" onkeypress="return soloLetras(event);" autocomplete="apeMaterno" autofocus>
                                    <p id="resultado_apeMaterno"></p>
                                </div>
                            </div>
                        </div>

                        <div class="input-group input-group-sm mb-3">
                            
                            <div class="col-6">
                                <label for="email" class="col-form-label text-md-right">{{ __('E-Mail') }}</label>
                                <div class="">
                                    <input id="email" type="text" class="form-control" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
    
                                    <p id="resultado_email"></p>
                                </div>
                            </div>

                            <div class="col-6">
                                <label for="telefono" class="col-form-label text-md-right">{{ __('Teléfono') }}</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="inputGroup-sizing-sm">+56</span>
                                    </div> 
                                    <input id="telefono" type="text" class="form-control" name="telefono" value="{{ old('telefono') }}" onkeypress="return soloNumeros(event);" maxlength="9" required autocomplete="telefono" autofocus>
                                    <p id="resultado_telefono"></p>
                                </div>
                            </div>
                            
                        </div>

                        <div class="input-group input-group-sm mb-3">

                            <div class="col-6">
                                <label for="password" class="col-form-label text-md-right">{{ __('Contraseña') }}</label>

                                <div class="input-group">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                    <div class="input-group-append">
                                        <button class="btnOjo" id="btnOjo" type="button" onclick="mostrarContraseña()"><i class="fas fa-eye"></i></button>
                                    </div>
                                    <p id="resultado_password"></p>      
                                </div>
                            </div>
                            <div class="col-6">
                                <label for="password-confirm" class="col-form-label text-md-right">{{ __('Confirme Contraseña') }}</label>

                            <div class="input-group">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                <div class="input-group-append">
                                    <button class="btnOjo" type="button" id="btnOjoConfir" onclick="mostrarContraseñaConfir()"><i class="fas fa-eye"></i></button>
                                </div>
                                <p id="resultado_passconfirm"></p>
                            </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-5 mt-3">
                                <button type="submit" class="btn btnRegistrar" id="btn-registrar">
                                    {{ __('Actualizar') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
