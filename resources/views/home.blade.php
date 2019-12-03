@extends('admin.dashboard')

@section('content')
<div class="card mt-4">
        <div class="card-header">
            <h3 class="card-title">Bienvenido</h3>
    
            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
                    <i class="fa fa-minus"></i></button>
                <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                    <i class="fa fa-times"></i></button>
            </div>
        </div>
        <div class="card-body">
            @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
            @endif
            ¡Estás conectado a la intranet de veterinaria Mi Mejor Patita!
        </div>
        <div class="card-footer">
            Mi Mejor Patita
        </div>
    </div>
@endsection
