@extends('admin.dashboard')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card my-4">
                    <h5 class="card-header">
                        Ver Producto
                        <a href="{{ route('products.edit', $product->id)}}" class="btn btn-sm btn-primary pull-right">Editar</a>
                    </h5>
                    <div class="card-body">
                        <p><strong>Nombre: </strong>{{ $product->name }}</p>
                        </p>
                        <p><strong>Imagen de Producto: <br></strong>
                            <div class="text-center">
                                <img src="{{ asset('image/'.$product->file)}}" alt="{{ $product->name}}" class="img-fluid" style="width:450px">
                            </div>
                        </p>
                        <p><strong>Precio: </strong>{{ $product->price }}</p>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
@endsection