@extends('admin.dashboard')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card my-4">
                    <h5 class="card-header">
                        Crear Producto
                        <a href="{{ route('products.index')}}" class="btn btn-sm btn-outline-success pull-right">Regresar a lista</a>
                    </h5>
                    <div class="card-body">
                        {!! Form::open(['route' => 'products.store', 'files' => true]) !!}
                            @include('admin.products.partials.form')
                        {!! Form::close() !!}
                    </div>
                </div>
                
            </div>
        </div>
    </div>
@endsection
