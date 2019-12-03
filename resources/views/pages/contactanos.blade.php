@extends('layouts.plantilla')

@section('content')

{{-- ::breadcrumb part start:: --}}
<section class="breadcrumb breadcrumb_bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb_iner">
                    <div class="breadcrumb_iner_item">
                        <h1>Contactanos</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- ::breadcrumb part start:: --}}

 {{-- ================ contact section start =================  --}}
<section class="contact-section section_padding">
    <div class="container">
        <div class="d-none d-sm-block mb-0 pb-0">
        </div>
    </div>
    <div class="container map">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3903.149229559486!2d-77.07385738592953!3d-11.964168091522346!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105ce24cda12607%3A0x4a548b595e025b8e!2sMi%20Mejor%20Patita!5e0!3m2!1ses!2spe!4v1574269232394!5m2!1ses!2spe"
            width="1100" height="300" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
        <br><br>
    </div>
    <div class="container">
      <div class="row">
          <div class="col-12"> <br> <br>
              <h2 class="contact-title">PONGASE EN CONTACTO</h2>
          </div>
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
          <div class="col-lg-8">
            
          <form class="form-contact contact_form" action="{{route('contact')}}" method="POST">
            @csrf
                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            <textarea class="form-control w-100" name="message" id="message" cols="30" rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Ingrese Mensaje'" placeholder='Ingrese Mensaje'>{{old('message')}}</textarea>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <input class="form-control" name="name" id="name" type="text"
                                onfocus="this.placeholder = ''" onblur="this.placeholder = 'Ingrese su nombre'" placeholder='Ingrese su nombre' value="{{old('name')}}">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <input class="form-control" name="email" id="email" type="text"
                                onfocus="this.placeholder = ''" onblur="this.placeholder = 'Ingrese su correo'" placeholder='Ingrese su correo' value="{{old('email')}}">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <input class="form-control" name="subject" id="subject" type="text"
                                onfocus="this.placeholder = ''" onblur="this.placeholder = 'Ingrese el asunto'" placeholder='Ingrese el asunto' value="{{old('subject')}}">
                        </div>
                    </div>
                </div>
                <div class="form-group mt-3 text-center">
                    <button class="btn btn-main pull-right">Enviar Mensaje</button>
                    {{-- <a href="#" class="btn btn-main pull-right">Enviar Mensaje</a> --}}
                </div>
              </form>
          </div>
          <div class="col-lg-4">
              <div class="media contact-info">
                  <span class="contact-info__icon"><i class="ti-home"></i></span>
                  <div class="media-body">
                      <h3>Lima, Perú.</h3>
                      <p>Los Olivos,15304</p>
                  </div>
              </div>
              <div class="media contact-info">
                  <span class="contact-info__icon"><i class="ti-tablet"></i></span>
                  <div class="media-body">
                      <h3>927269728</h3>
                      <p>Lunes a Domingo de 9am a 9pm</p>
                  </div>
              </div>
              <div class="media contact-info">
                  <span class="contact-info__icon"><i class="ti-email"></i></span>
                  <div class="media-body">
                      <h3>Mimejorpatita@gmail.com</h3>
                      <p>¡Envíenos su consulta en cualquier momento!</p>
                  </div>
              </div>
          </div>
      </div>
    </div>
    </div>
</section>

@endsection