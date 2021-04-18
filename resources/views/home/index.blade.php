@extends('layouts.main')
@section('main.content')
    <section class="hero-section">
        <div class="container">
            <div class="hero-content text-center">
                <h1 class="text-bold text-uppercase">Quality RIDE SHARE SERVICES</h1>
                <h1 class="text-uppercase mt-0">CATERING TO YOUR EVERY NEED</h1>
<!--                 <h2 class="text-uppercase mt-30">We will treat you right</h2> -->
                <div class="buttons mt-40">
                    <a href="#" class="btn btn-primary">Try Zcon</a>
                    <a href="#" class="btn btn-primary">Sign up to drive</a>
                </div>
            </div>
        </div>
    </section>

<!-- Services -->
    <div class="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <img src="{{asset('front_assets/img/cs.png')}}" class="img-fluid" alt="cs.png">
                </div>
                <div class="col-lg-3 col-md-6">
                    <img src="{{asset('front_assets/img/qs.png')}}" class="img-fluid" alt="qs.png">
               </div>
                <div class="col-lg-3 col-md-6">
                    <img src="{{asset('front_assets/img/rs.png')}}" class="img-fluid" alt="rs.png">
               </div>
                <div class="col-lg-3 col-md-6">
                    <img src="{{asset('front_assets/img/ws.png')}}" class="img-fluid" alt="ws.png">
               </div>
            </div>
        </div>
    </div>
    <!-- /Services -->

{{--  Image Gellery Section  --}}
    <section class="section-one">
        <div class="container">
            <div class="content text-center">
                <h2 class="text-bold text-uppercase">Celebrating the Pillars of the Community</h2>
                <p class="text-bold text-uppercase">
                    THE ZCON TEAM WILL RESPECT AND TREAT YOU RIGHT!
                </p>
                <div class="img-grid mt-30">
                    <div class="item">
                        <img src="{{asset('front_assets/img/Woman in headscarf.png')}}" alt="" class="img-responsive">
                    </div>
                    <div class="item">
                        <img src="{{asset('front_assets/img/african-lady.jpg')}}" alt="" class="img-responsive">
                    </div>
                    <div class="item">
                        <img src="{{asset('front_assets/img/Asian Lady.png')}}" alt="" class="img-responsive">
                    </div>
                    <div class="item">
                        <img src="{{asset('front_assets/img/white_lady-2.jpg')}}" alt="" class="img-responsive">
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection