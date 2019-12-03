@extends('admin.dashboard')

@section('styles')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
@endsection
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card my-4">
                    <h5 class="card-header">
                        Lista de Productos
                        {{-- <a href="#" class="btn btn-success pull-right">Crear</a> --}}
                        <a href="{{ route('products.create')}}" class="btn btn-success pull-right">Crear</a>
                    </h5>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover" id="example">
                                <thead>
                                    <tr>
                                        <th width="10px">ID</th>
                                        <th>Nombre</th>
                                        <th>Imagen</th>
                                        <th>Precio</th>
                                        <th>Estado</th>
                                        <th>Fecha de Publicación</th>
                                        <th>Fecha de Actualización</th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($products as $product)
                                    <tr>
                                        <td>{{ $product->id}}</td>
                                        <td>{{ $product->name}}</td>
                                        <td>
                                            <img src="{{ asset('image/'.$product->file)}}" alt="{{ $product->name}}" class="img-fluid" style="width: 100px;">
                                        </td>
                                        <td>{{ $product->price}}</td>
                                        <td class="text-center">
                                        @if ($product->status == "PUBLISHED")
                                            <i class="fa fa-check" style="font-size: 27px;color: #3fd03f;" title="Publicado"><span class="d-none">p</span></i>
                                        @else
                                            <i class="fa fa-times" style="font-size: 27px;color: #ff4052;" title="Borrador"><span class="d-none">b</span></i>
                                        @endif
                                        </td>
                                        <td>{{ $product->created_at}}</td>
                                        <td>{{ $product->updated_at}}</td>
                                        <td width="10px">
                                            <a href="{{ route('products.show', $product->id)}}" class="btn btn-sm btn-info">
                                            {{-- <a href="#" class="btn btn-sm btn-info"> --}}
                                                Ver
                                            </a>
                                        </td>
                                        <td width="10px">
                                            <a href="{{ route('products.edit', $product->id)}}"
                                            class="btn btn-sm btn-primary">
                                                Editar
                                            </a>
                                        </td>
                                        <td width="10px">
                                            {{-- <button class="btn btn-sm btn-danger">
                                                Eliminar
                                            </button> --}}
                                            {!! Form::open(['route' => ['products.destroy', $product->id], 'method' => 'DELETE']) !!}
                                                <button class="btn btn-sm btn-danger">
                                                    Eliminar
                                                </button>
                                            {!! Form::close() !!}
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
@endsection

@section('scripts')
{{-- script para la busqueda en tiempo real --}}
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
<script>
    $(document).ready(function () {
        $('#example').DataTable();
    });
    // Cambiando de idioma a español datatable
    var table = $('#example').DataTable({
        "order": [[ 0, "desc" ]],
        language: {
            "decimal": "",
            "emptyTable": "No hay información",
            "info": "Mostrando _START_ a _END_ de _TOTAL_ Entradas",
            "infoEmpty": "Mostrando 0 to 0 of 0 Entradas",
            "infoFiltered": "(Filtrado de _MAX_ total entradas)",
            "infoPostFix": "",
            "thousands": ",",
            "lengthMenu": "Mostrar _MENU_ Entradas",
            "loadingRecords": "Cargando...",
            "processing": "Procesando...",
            "search": "Buscar:",
            "zeroRecords": "Sin resultados encontrados",
            "paginate": {
                "first": "Primero",
                "last": "Ultimo",
                "next": "Siguiente",
                "previous": "Anterior"
            }
        }
    });
</script>
@endsection