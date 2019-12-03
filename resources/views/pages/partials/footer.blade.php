<footer class="footer_area padding_top">
    <div class="container">
    @if(url()->full() == route('index'))
        <div class="row justify-content-center ">
            <div class="col-lg-8 col-xl-6">
                <div class="subscribe_part_text text-center">
                    <h2>Suscribite al boletín informativo</h2>
                    <p>Seguimos estrictamente las pautas sanitarias y de desinfección de la Junta Estatal.</p>
                    <div class="subscribe_form">
                        <form action="#" name="#">
                            <div class="input-group align-items-center">
                                <input type="email" class="form-control" placeholder="Introduce tu email">
                                <div class="subscribe_btn input-group-append">
                                    <div class="btn_1" onclick="alert('Gracias por suscribirte te estaremos enviando más boletines informativos para el cuidado de tus mascotas');">
                                        Prueba Gratis
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
       @endif
        <div class="row justify-content-between section_padding">
            <div class="col-xl-2 col-sm-6 col-md-3 mb-4 mb-xl-0 single-footer-widget">
                <h4>Menu</h4>
                <ul>
                    <li><a href="{{route('index')}}">Inicio</a></li>
                    <li><a href="{{route('nosotros')}}">Nosotros</a></li>
                    <li><a href="{{route('petshop')}}">PetShop</a></li>
                    <li><a href="{{route('contactanos')}}">Contactanos</a></li>
                </ul>
            </div>
            <div class="col-xl-2 col-sm-6 col-md-3 mb-4 mb-xl-0 single-footer-widget">
                <h4>Contactanos</h4>
                <ul>
                    <li><a href="tel:51927269728">927269728</a></li>
                    <li><a href="mailto:mimejorpatita@gmail.com">mimejorpatita@gmail.com</a></li>
                </ul>
            </div>
            <div class="col-xl-2 col-sm-6 col-md-3 mb-4 mb-xl-0 single-footer-widget">
                <h4>Ubicanos</h4>
                <ul>
                    <li><a href="{{route('contactanos')}}">Av. Universitaria 6138, Los Olivos 15304
                            Lima, Perú</a></li>
                    <li><a href="{{route('contactanos')}}">Obten nuestra dirección</a></li>
                </ul>
            </div>
            <div class="col-xl-2 col-sm-6 col-md-3 mb-4 mb-xl-0 single-footer-widget">
                <h4>Horarios de Atención</h4>
                <ul>
                    <li><a href="{{route('citas')}}">Lunes-Sabados (9.00-9.00)</a></li>
                    <li><a href="{{route('citas')}}">Domingos (9.00-2.00)</a></li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="copyright_text">
                    <img src="img/logo5.png" alt="#">
                    <p class="footer-text">
                        <!-- -->
                        Copyright &copy;<script>
                            document.write(new Date().getFullYear());
                        </script> Todos los derechos reservados{{-- <i class="ti-heart" aria-hidden="true"></i> por <a
                            href="" target="_blank">SonyHarv</a> --}}
                        <!--  -->
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>