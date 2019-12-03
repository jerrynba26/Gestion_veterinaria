@extends('admin.dashboard')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card my-4">
                    <h5 class="card-header">
                        Crear Cita
                        <a href="{{ route('dates.index')}}" class="btn btn-sm btn-outline-success pull-right">Regresar a lista</a>
                    </h5>
                    <div class="card-body">
                        {!! Form::open(['route' => 'dates.store', 'files' => true]) !!}
                            @include('admin.dates.partials.form')
                        {!! Form::close() !!}
                    </div>
                </div>
                
            </div>
        </div>
    </div>
@endsection
