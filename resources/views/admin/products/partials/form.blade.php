@section('styles')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/css/bootstrap-select.min.css">
@endsection
{{-- {{ Form::hidden('user_id', auth()->user()->id) }} --}}

<div class="form-group">
    {{ Form::label('name', 'Nombre del producto') }}
    {{ Form::text('name', null, ['class' => 'form-control', 'id' => 'name']) }}
</div>
<div class="form-group">
	{{ Form::label('file', 'Imagen') }}
	<button type="button" class="btn m-0 p-0" data-toggle="tooltip" data-placement="top" 
	title="La imagen debe ser de formato .webp, .png, .jpg o .svg. De preferencia .webp para una mejor carga en la página">
		<i class="fa fa-question-circle">
		</i>
	</button>
    {{ Form::file('file') }}
</div>
<div class="form-group">
	{{ Form::label('status', 'Estado') }}
	<label>
		{{ Form::radio('status', 'PUBLISHED') }} Publicado
	</label>
	<label>
		{{ Form::radio('status', 'DRAFT') }} Borrador
	</label>
</div>
<div class="form-group">
	{{ Form::label('price', 'Precio') }}
    {{ Form::text('price', null, ['class' => 'form-control']) }}
</div>

<div class="form-group">
    {{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary float-right']) }}
</div>

@section('scripts')
<script src="{{ asset('vendor/ckeditor/ckeditor.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/js/bootstrap-select.min.js"></script>
@endsection