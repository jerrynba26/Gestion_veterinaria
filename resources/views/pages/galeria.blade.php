@extends('layouts.plantilla')

@section('content')
<!--::breadcrumb part start::-->
<section class="breadcrumb breadcrumb_bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb_iner">
                    <div class="breadcrumb_iner_item">
                        <h1>Galeria</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--::breadcrumb part start::-->

<!-- gallery part css here -->
<section class="gallery_part section_padding">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="gallery_tittle">
                    <p>Estas son algunas de nuestras experiencias con nuestros amigos caninos...</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-sm-6">
                <a href="img/gallery-01.png" class="single_gallery_part">
                    <img src="img/gallery-01.png" alt="">
                    <i class="ti-plus"></i>
                </a>
            </div>
            <div class="col-lg-4 col-sm-6">
                <a href="img/gallery-02.png" class="single_gallery_part">
                    <img src="img/gallery-02.png" alt="">
                    <i class="ti-plus"></i>
                </a>
            </div>
            <div class="col-lg-4 col-sm-6">
                <a href="img/gallery-03.png" class="single_gallery_part">
                    <img src="img/gallery-03.png" alt="">
                    <i class="ti-plus"></i>
                </a>
            </div>
            <div class="col-lg-4 col-sm-6">
                <a href="img/gallery-04.png" class="single_gallery_part">
                    <img src="img/gallery-04.png" alt="">
                    <i class="ti-plus"></i>
                </a>
            </div>
            <div class="col-lg-4 col-sm-6">
                <a href="img/gallery-05.png" class="single_gallery_part">
                    <img src="img/gallery-05.png" alt="">
                    <i class="ti-plus"></i>
                </a>
            </div>
            <div class="col-lg-4 col-sm-6">
                <a href="img/gallery-06.png" class="single_gallery_part">
                    <img src="img/gallery-06.png" alt="">
                    <i class="ti-plus"></i>
                </a>
            </div>
        </div>
    </div>
</section>
<!-- gallery part css end -->
@endsection