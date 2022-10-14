@extends('Layout.index')
@section('content')
	@include('Layout.header')
	<!-- END nav -->

	<!-- Hero Section Begin -->
    <section class="hero">
        <div class="hero__slider owl-carousel">
            <div class="hero__items set-bg" data-setbg="assets/img/hero/hero-1.jpg">
                <div class="hero__text">
                    <h2>Quality is not only our standard.</h2>
                    <a href="#" class="primary-btn">See Project</a>
                    <a href="#" class="more_btn">Discover more</a>
                    <div class="hero__social">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                        <a href="#"><i class="fa fa-linkedin"></i></a>
                    </div>
                </div>
            </div>
            <div class="hero__items set-bg" data-setbg="assets/img/hero/hero-2.jpg">
                <div class="hero__text">
                    <h2>Quality is not only our standard.</h2>
                    <a href="#" class="primary-btn">See Project</a>
                    <a href="#" class="more_btn">Discover more</a>
                    <div class="hero__social">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                        <a href="#"><i class="fa fa-linkedin"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="slide-num" id="snh-1"></div>
        <div class="slider__progress"><span></span></div>
    </section>
    <!-- Hero Section End -->

    @include('Layout.footer')

@endsection
