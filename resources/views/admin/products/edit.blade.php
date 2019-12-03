@extends('admin.dashboard')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card my-4">
                    <h5 class="card-header">
                        Editar Producto
                    </h5>
                    <div class="card-body">
                        {!! Form::model($product, ['route' => ['products.update', $product->id], 'method' => 'PUT','files' => true]) !!}
                            @include('admin.products.partials.form')
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection