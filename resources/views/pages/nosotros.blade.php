@extends('layouts.plantilla')

@section('content')
<!--::breadcrumb part start::-->
<section class="breadcrumb breadcrumb_bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb_iner">
                    <div class="breadcrumb_iner_item">
                        <h1>Nosotros</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--::breadcrumb part start::-->

<!-- about part start-->
<section class="about_part section_padding">
    <div class="container">
        <div class="row align-items-center justify-content-between">
            <div class="col-md-6">
                <div class="about_img">
                    <img src="img/about.png" alt="">
                </div>
            </div>
            <div class="col-md-5">
                <div class="about_text">
                    <img src="img/about_icon.png" class="about_icon" alt="">
                    <h2>"Mi Mejor Patita"</h2>
                    <p>Somos un equipo de Médicos veterinarios con estudios y experiencia en el campo de la medicina veterinaria, cuidar la salud de un animalito es nuestra pasión.

                        Disponemos de las mejores instalaciones y el mejor personal capacitado para garantizar el bienestar de tu mascota.
                        
                        Tu tranquilidad y la salud de tu engreído estarán en las mejores manos, porque tú y tu mascota al entrar por las puertas de nuestra clínica, pasarán a formar parte de nuestra gran familia.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- about part start-->
<!-- client review part here -->

<!-- voulantier part css here -->
<section class="voulantier_part section_padding">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="section_tittle text-center">
                    <img src="img/about_icon.png" alt="">
                    <h2>Nuestro Equipo</h2>
                    <p>Trabajando en conjunto con agencias de ayuda humanitaria, hemos apoyado programas para ayudar a aliviar el sufrimiento humano a través del bienestar animal cuando las personas pueden depender.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-sm-6">
                <div class="single_voulantier_part">
                    <img src="images/team/luis.jpeg" alt="#">
                    <h4>Luis Llua</h4>
                    <p>Administrador</p>
                    <div class="social_icon">
                        <a href="#"> <i class="ti-email"></i> </a>
                        <a href="#"> <i class="ti-twitter-alt"></i> </a>
                        <a href="#"> <i class="ti-linkedin"></i> </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="single_voulantier_part">
                    <img src="images/team/joselyn.jpeg" alt="#">  
                    <h4>Joselyn Villanueva</h4>
                    <p>Veterinaria</p>
                    <div class="social_icon">
                        <a href="#"> <i class="ti-email"></i> </a>
                        <a href="#"> <i class="ti-twitter-alt"></i> </a>
                        <a href="#"> <i class="ti-linkedin"></i> </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="single_voulantier_part">
                    <img src="images/team/jose.jpg" alt="#">
                    <h4>Jose Quispe</h4>
                    <p>Veterinario</p>
                    <div class="social_icon">
                        <a href="#"> <i class="ti-email"></i> </a>
                        <a href="#"> <i class="ti-twitter-alt"></i> </a>
                        <a href="#"> <i class="ti-linkedin"></i> </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection