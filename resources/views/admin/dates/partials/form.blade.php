@section('styles')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/css/bootstrap-select.min.css">
@endsection
{{-- {{ Form::hidden('user_id', auth()->user()->id) }} --}}

<div class="form-group">
    {{ Form::label('nomcliente', 'Nombre del cliente') }}
    {{ Form::text('nomcliente', null, ['class' => 'form-control', 'id' => 'nomcliente']) }}
</div>
<div class="form-group">
    {{ Form::label('appcliente', 'Apellidos del cliente') }}
    {{ Form::text('appcliente', null, ['class' => 'form-control', 'id' => 'appcliente']) }}
</div>

<div class="form-group">
    {{ Form::label('fechacita', 'Fecha cita') }}
    {{ Form::date('fechacita', null, ['class' => 'form-control', 'id' => 'fechacita']) }}
</div>

<div class="form-group">
    {{ Form::label('horacita', 'Hora cita') }}
    {{ Form::time('horacita', null, ['class' => 'form-control', 'id' => 'horacita']) }}
</div>

<div class="form-group">
		{{-- Form::select('size', ['L' => 'Large', 'S' => 'Small']); --}}
    {{ Form::label('tipomascota', 'Tipo de mascota') }}
    {{ Form::text('tipomascota', null, ['class' => 'form-control', 'id' => 'tipomascota']) }}
</div>

<div class="form-group">
    {{ Form::label('nommascota', 'Nombre de mascota') }}
    {{ Form::text('nommascota', null, ['class' => 'form-control', 'id' => 'nommascota']) }}
</div>
<div class="form-group">
    {{ Form::label('observacion', 'Observación') }}
    {{ Form::textarea('observacion', null, ['class' => 'form-control', 'id' => 'observacion']) }}
</div>

<div class="form-group">
    {{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary float-right']) }}
</div>

@section('scripts')
<script src="{{ asset('vendor/ckeditor/ckeditor.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/js/bootstrap-select.min.js"></script>
@endsection