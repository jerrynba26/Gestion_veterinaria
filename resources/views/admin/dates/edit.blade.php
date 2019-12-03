@extends('admin.dashboard')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card my-4">
                    <h5 class="card-header">
                        Editar Cita
                    </h5>
                    <div class="card-body">
                        {!! Form::model($date, ['route' => ['dates.update', $date->id], 'method' => 'PUT']) !!}
                            @include('admin.dates.partials.form')
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection