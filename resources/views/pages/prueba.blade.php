@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Citas</div>

                <div class="card-body">
                   <div class="form-group">
                    <form id="form-add-visit">
                        <div class="form-row">
                            <div class="col">
                                <input type="text" name="name" id="name" class="form-control" placeholder="Nombre">
                                <div class="invalid-feedback error-name">El nombre es obligatorio.</div>
                            </div>
                            <div class="col">
                                <input type="text" name="lastname" id="lastname" class="form-control" placeholder="Apellidos">
                                <div class="invalid-feedback error-lastname">Los apellidos son obligatorio.</div>
                            </div>
                        </div>
                        <div>&nbsp;</div>
                        <div class="form-row">
                            <div class="col">
                                <input type="date" name="date" id="date" class="form-control">
                                <div class="invalid-feedback error-date">La fecha es obligatoria.</div>
                            </div>
                            <div class="col">
                                <input type="time" name="time" id="time" class="form-control">
                                <div class="invalid-feedback error-time">La hora es obligatoria.</div>
                            </div>
                        </div>
                        <div>&nbsp;</div>
                        <div class="form-row">
                            <div class="col">
                                <select name="typeAnimal" class="form-control" id="typeAnimal">
                                    <option selected="" value="">[---Selecionar---]</option>
                                    <option value="Perro">Perro</option>
                                    <option value="Gato">Gato</option>
                                    <option value="Pez">Pez</option>
                                    <option value="Cerdo">Cerdo</option>
                                    <option value="Cuy">Cuy</option>
                                </select>
                                <div class="invalid-feedback error-typeAnimal">Seleciona un tipo de animal.</div>
                            </div>
                            <div class="col">
                                <input type="text" name="nameAnimal" class="form-control" placeholder="Nombre del animal" id="nameAnimal">
                                <div class="invalid-feedback error-nameAnimal">El nombre del animal es obligatorio.</div>
                            </div>
                        </div>
                        <div>&nbsp;</div>
                        <textarea name="observation" class="form-control" row="4" placeholder="Explica el motivo de su cita." id="observation"></textarea>
                        <div class="invalid-feedback error-observation">La observacion es obligatoria.</div>
                        <div>&nbsp;</div>
                        <button type="submit" class="btn btn-success btn-block btn-send-form" id="create-cita">CREAR CITA</button>
                    </form>

                   </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
    <script>
        $(document).ready(function () {
            // Mostramos las funciones
            sendForm();
        });

        function sendForm(){
            $("#create-cita").click(function (e) { 
                e.preventDefault();
                var name = $("#name").val();
                var lastname = $("#lastname").val();
                var date = $("#date").val(); //Output 1995-11-10
                var time = $("#time").val();
                var typeAnimal = $("#typeAnimal").val();
                var nameAnimal = $("#nameAnimal").val();
                var observation = $("#observation").val();

                // Validamos si los campos están vacíos
                var msg = "";

                if(name == ''){
                    msg += "Debe ingresar su nombre";
                    alert(msg);
                }
                else if(lastname == ''){
                    msg += "Debe ingresar sus apellidos";
                    alert(msg);
                }
                else if(date == ''){
                    msg += "Debe fecha de cita";
                    alert(msg);
                }
                else if(time == ''){
                    msg += "Debe ingresar hora de la cita";
                    alert(msg);
                }
                else if(typeAnimal == ''){
                    msg += "Seleccione tipo de mascota";
                    alert(msg);
                }
                else if(nameAnimal == ''){
                    msg += "Ingrese el nombre de su mascota";
                    alert(msg);
                }
                else if(observation== ''){
                    msg += "Ingrese el detalle de su cita";
                    alert(msg);
                }

                // Si todos los campos están rellenados lo imprimimos por consola
                else{
                    console.log(name);
                    console.log(lastname);
                    console.log(date);
                    console.log(time);
                    console.log(typeAnimal);
                    console.log(nameAnimal);
                    console.log(observation);
                }
               
            });
        }
    </script>
@endsection