@extends('admin.dashboard')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card my-4">
                    <h5 class="card-header">
                        Ver Cita
                        <a href="{{ route('dates.edit', $date->id)}}" class="btn btn-sm btn-primary pull-right">Editar</a>
                    </h5>
                    <div class="card-body">
                        <p><strong>Nombre cliente:</strong> {{ $date->nomcliente}}</p>
                        <p><strong>Apellidos cliente:</strong> {{ $date->appcliente}}</p>
                        <p><strong>Fecha cita:</strong> {{ $date->fechacita}}</p>
                        <p><strong>Hora cita:</strong> {{ $date->horacita}}</p>
                        <p><strong>Tipo de mascota:</strong> {{ $date->tipomascota}}</p>
                        <p><strong>Nombre de mascota:</strong>{{ $date->nommascota}}</p>
                        <p><strong>Observación:</strong> {{ $date->observacion}}</p>
                        <p><strong>Fecha creada:</strong> {{ $date->created_at}}</p>
                        <p><strong>Fecha actualización:</strong> {{ $date->updated_at}}</p>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
@endsection