@extends('layouts.plantilla')

@section('content')

@include('pages.partials.social')
<!-- banner part start-->
<video muted loop autoplay>
    <source src="videos/video2.mp4">
</video>
<!-- banner part start-->
<br>
<div class="container text-center">
    <div class="btn_1">
        <a href="#servicios" class="btn_1">Nuestros Servicios</a>
    </div>
</div>
</div>
</div>

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
                    <h2>Cuidamos a tu mascota como a ti te importa</h2>
                    <p>Trabajando en conjunto con agencias de ayuda humanitaria, hemos apoyado programas para ayudar
                        a aliviar el sufrimiento humano a través del bienestar animal cuando las personas pueden
                        depender del ganado como su única fuente de ingresos o alimentos.</p>
                    <a href="{{route('nosotros')}}" class="btn_1">Nosotros</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- about part start-->

<!-- service part start-->
<section class="service_part section_padding services_bg" id="servicios">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="section_tittle text-center">
                    <img src="img/about_icon.png" alt="">
                    <h2>Brindamos los mejores servicios</h2>
                    <p>Contamos con diversos servicios dedicado exclusivamente a tus engreidos que van acompañados
                        de la mejor atención que ellos se merecen.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-sm-6">
                <div class="single_service_part">
                    <img src="img/cirugia1.jpg" alt="#">
                    <h3>Cirugías de mascotas</h3>
                    <p>Nuestros profesionales se encuentran capacitados para realizar todo tipo de cirugías
                        generales, desde esterilizaciones, hasta extracción de tumores.</p>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="single_service_part">
                    <img src="img/grooming1.jpg" alt="#">
                    <h3>Grooming</h3>
                    <p>Engreímos a su mascota en nuestra peluquería canina, donde nuestros experimentados groomers
                        le ofrecerán un servicio de alta calidad.</p>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="single_service_part">
                    <img src="img/emergencia1.jpg" alt="#">
                    <h3>Atención Emergencia 24 hrs</h3>
                    <p>Atendemos las 24 horas los 365 días del año, incluido feriados.</p>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="single_service_part">
                    <img src="img/hospitalizacion1.jpg" alt="#">
                    <h3>Hospitalización y Cuidado de mascotas</h3>
                    <p>Ofrecemos el servicio de hospitalización para los pacientes que necesitan cuidados
                        especiales.</p>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="single_service_part">
                    <img src="img/single_service_2-.png" alt="#">
                    <h3>Nutrición Clínica</h3>
                    <p>Una dieta equilibrada ayuda a la mascota enferma a incorporar los nutrientes que necesita
                        para reponerse.</p>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="single_service_part">
                    <img src="img/adopcion1.jpg" alt="#">
                    <h3>Adopción de mascotas</h3>
                    <p>Nuestro servicio gratutito de adopción de mascotas ayuda a contribuir a la reducción masiva
                        de animales sin protección que estan varados en las calles, adopta y encuentra tu compañero
                        ideal!.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- service part end-->

<!-- counter adopt number here -->
<section class="abopt_number_counter section_padding">
    <div class="container">
        <div class="row align-items-center justify-content-between">
            <div class="col-lg-5 col-md-6">
                <div class="counter_text">
                    <h2>Necesitamos tu ayuda Adoptanos</h2>
                    <p>Trabajando en conjunto con agencias de ayuda humanitaria, hemos apoyado programas de adopción
                        para aliviar el sufrimiento de animales sin protección y brindarles calor humano.</p>
                    <div class="counter_number">
                        <div class="single_counter_number">
                            <img src="img/adopt_icon_1.png" alt="#">
                            <h3><span class="count">590</span>+</h3>
                            <p>Mascotas Disponibles</p>
                        </div>
                        <div class="single_counter_number">
                            <img src="img/adopt_icon_2.png" alt="#">
                            <h3><span class="count">300</span>+</h3>
                            <p>Clientes felices</p>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="adopt_image">
                    <img src="img/adopt_img.png" alt="#">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- counter adopt number end -->

<!-- client review part here -->
<section class="client_review">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="client_review_content owl-carousel">
                    <div class="singke_client_review">
                        <img src="img/review_img_1.png" alt="#">
                        <h4>" Hasta que uno no ha amado un animal, una parte del alma sigue sin despertar".</h4>
                        <p>- Anatole France</p>
                    </div>
                    <div class="singke_client_review">
                        <img src="img/review_img_1.png" alt="#">
                        <h4>" Nuestros compañeros perfectos nunca tienen menos de cuatro patas.</h4>
                        <p>- Colette</p>
                    </div>
                    <div class="singke_client_review">
                        <img src="img/review_img_1.png" alt="#">
                        <h4>" Los animales son muy buenos amigos; no hace preguntas, no critican".</h4>
                        <p>- George Eliot</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- client review part end -->

<!-- about part start-->
<section class="about_part section_padding">
    <div class="container">
        <div class="row align-items-center justify-content-between">
            <div class="col-md-6">
                <div class="about_img">
                    <img src="img/valunteer_img.png" alt="">
                </div>
            </div>
            <div class="col-md-5">
                <div class="about_text">
                    <img src="img/about_icon.png" class="about_icon" alt="">
                    <h2>Hazte voluntario para ayudarlos</h2>
                    <p>Siempre has tenido mascota en tu familia o siempre has soñado con tenerla. Te encantaría
                        llegar a casa y que algún sabueso o algún gatuno viniera a saludarte. Si tuvieras un perro
                        lleno de energía sí que te escaparías a aquella montaña todos los domingos o simplemente
                        quieres cuidar de tu gato y disfrutar con él viendo series de tele tumbados en el sofá? ¿Qué
                        esperás? ¡Adopta ya!</p>

                </div>
            </div>
        </div>
    </div>
</section>
@endsection