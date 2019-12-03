@extends('layouts.plantilla')

@section('styles')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@9.4.0/dist/sweetalert2.min.css">
@endsection

@section('content')
<!--::breadcrumb part start::-->
<section class="breadcrumb breadcrumb_bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb_iner">
                    <div class="breadcrumb_iner_item">
                        <h1>Reserva tus citas Aquí</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--::breadcrumb part start::-->

<div class="container block-app">
    <div class="row">
        {{-- START: Mostramos los errores a la hora de ingresar los datos en el formulario --}}
        <div class="col-md-12 col-lg-8 p-0">
                @if (session('info'))
                <div class="container-fluid mt-3">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="alert alert-success">
                                {{ session('info') }}
                            </div>
                        </div>
                    </div>
                </div>
                @endif
                @if (count($errors))
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                @endif
            </div>
          {{-- END --}} 
        <div class="col-sm-12 block-form">
            <h2><b>NUEVA CITA</b></h2>
            {{-- {!! Form::open(['route' => 'dates.store', 'files' => true]) !!} --}}
            <form id="form-add-visit" method="POST" action="{{route('dates.store')}}">
                @csrf
                <div class="form-row">
                    <div class="col">
                        <input type="text" name="nomcliente" id="nomcliente" class="form-control" placeholder="Nombre" />
                        <div class="invalid-feedback error-name">El nombre es obligatorio.</div>
                    </div>
                    <div class="col">
                        <input type="text" name="appcliente" id="appcliente" class="form-control" placeholder="Apellidos" />
                        <div class="invalid-feedback error-lastname">Los apellidos son obligatorio.</div>
                    </div>
                </div>
                <div>&nbsp;</div>
                <div class="form-row">
                    <div class="col">
                        <input type="date" name="fechacita" id="fechacita" class="form-control" />
                        <div class="invalid-feedback error-date">La fecha es obligatoria.</div>
                    </div>
                    <div class="col">
                        <input type="time" name="horacita" id="horacita" class="form-control" />
                        <div class="invalid-feedback error-time">La hora es obligatoria.</div>
                    </div>
                </div>
                <div>&nbsp;</div>
                <div class="form-row">
                    <div class="col">
                        <select name="tipomascota" class="form-control" id="tipomascota">
                            <option selected value="">[---Selecionar---]</option>
                            <option value="Perro">Perro</option>
                            <option value="Gato">Gato</option>
                            <option value="Otros">Otros</option>
                        </select>
                        <div class="invalid-feedback error-typeAnimal">Seleciona un tipo de animal.</div>
                    </div>
                    <div class="col">
                        <input type="text" name="nommascota" id="nommascota" class="form-control"
                            placeholder="Nombre del animal" />
                        <div class="invalid-feedback error-nameAnimal">El nombre del animal es obligatorio.</div>
                    </div>
                </div>
                <div>&nbsp;</div>
                <textarea name="observacion" id="observacion" class="form-control" row="4"
                    placeholder="Explica el motivo de su cita."></textarea>
                <div class="invalid-feedback error-observation">La observacion es obligatoria.</div>
                <div>&nbsp;</div>
                <button type="submit" class="btn btn-success btn-block btn-send-form" id="create-cita">CREAR
                    CITA</button>
            </form>
            {{-- {!! Form::close() !!} --}}

            <p class="error general-error"></p>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            &nbsp;
        </div>
    </div>
</div>
<div>

    @endsection

    @section('scripts')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9.4.0/dist/sweetalert2.min.js"></script>
    @endsection