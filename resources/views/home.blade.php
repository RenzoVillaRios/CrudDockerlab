@extends('layouts.app')
 
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="panel panel-default">
                
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-7">
                            <p><strong>Nombre de usuario:</strong></p>
                            <p style="color: blue;font-size: 19px;"><strong>{{ Auth::user()->name }}</strong></p>
                            <strong><p>--------------------------------</p></strong>
                            <p><strong>Correo Electrónico:</strong></p>
                            <p style="color: #298A08;font-size: 19px;"><strong>{{ Auth::user()->email }}</strong></p>
                        </div>
                        <div class="col-md-5" style="text-align: center;">
                            <img src="{{ Auth::user()->avatar }}" alt="{{ Auth::user()->name }}" class="img-responsive img-thumbnail"><br>
                            <a href="./contacto" type="button">Ver contactos</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading">Estado</div>
 
                <div class="panel-body">
                    Ingresaste Correctamente!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection