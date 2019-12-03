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
                        Lista de Citas
                    </h5>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover" id="example">
                                <thead>
                                    <tr>
                                        <th width="10px">ID</th>
                                        <th>Nombre Cliente</th>
                                        <th>Apellido Cliente</th>
                                        <th>Fecha Cita</th>
                                        <th>Hora Cita</th>
                                        <th>Tipo de mascota</th>
                                        <th>Nombre de mascota</th>
                                        <th>Observación</th>
                                        <th>Fecha creación</th>
                                        <th>Fecha actualización</th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($dates as $date)
                                    <tr>
                                        <td>{{ $date->id}}</td>
                                        <td>{{ $date->nomcliente}}</td>
                                        <td>{{ $date->appcliente}}</td>
                                        <td>{{ $date->fechacita}}</td>
                                        <td>{{ $date->horacita}}</td>
                                        <td>{{ $date->tipomascota}}</td>
                                        <td>{{ $date->nommascota}}</td>
                                        <td>{{ $date->observacion}}</td>
                                        <td>{{ $date->created_at}}</td>
                                        <td>{{ $date->updated_at}}</td>
                                        <td width="10px">
                                            <a href="{{ route('dates.show', $date->id)}}" class="btn btn-sm btn-info">
                                                Ver
                                            </a>
                                            {{-- <a href="#" class="btn btn-sm btn-info">
                                                Ver
                                            </a> --}}
                                        </td>
                                        <td width="10px">
                                            <a href="{{ route('dates.edit', $date->id)}}"
                                            class="btn btn-sm btn-primary">
                                                Editar
                                            </a>
                                            {{-- <a href="#" class="btn btn-sm btn-primary">
                                                Editar
                                            </a> --}}
                                        </td>
                                        <td width="10px">
                                            {{-- <button class="btn btn-sm btn-danger">
                                                Eliminar
                                            </button> --}}
                                            {!! Form::open(['route' => ['dates.destroy', $date->id], 'method' => 'DELETE']) !!}
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