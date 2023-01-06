@extends('main')
@section('title',"Home")


@section('pagestyles')



@endsection

@section('content')

<Section id="VideoConsult">
    <div class="hero" style="background-color: #C8EEF7;">
        <div class="container">
            <div class="row">
                <div class="col-md-6 headLeft">
                    <h1>Just Stay Home & Request Medical Advice Online</h1>
                    <h3>Get your consultation at just ₹ 400</h3>
                    <div class="doc">
                        <img src={{ asset('doctors.png') }} class="doc-pic">
                        <h4>+1000 Doctors Online</h4>
                    </div>
                    <a href="{{url('/DocConsultForm/en')}}" class="btn btn-primary" style="color: #fff;">Consult Now
                        <i class="fa fa-chevron-right"></i>
</a>
                </div>
                <div class="col-md-6 headRight">
                    <img src={{ asset('vdoConsultHome.png') }}>
                </div>
            </div>
        </div>
    </div>
    <div class="offer mb-5">
        <div class="container">
            <h1 class="heading">Offers</h1>
            <div class="row">
                <div class="card col-md-12 mt-2">
                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel" data-interval="100000">
                        <div class="w-100 carousel-inner mb-5" role="listbox">
                            <div class="carousel-item active">
                                <div class="bg"></div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="carousel-caption" style="background-color: #EDCBB7;">
                                            <div class="row">
                                                <div class="col-md-8 card_8">
                                                    <h2 class="text-left"><span class="badge badge-light text-success">80% OFF</span></h2>
                                                    <h1>Download the App & get ₹100 Health Cash</h1>
                                                    <p>Lorem ipsum dolor sit amet consectetur. Nunc congue at eros vestibulum ut est tristique tristique scelerisque. Ornare fames posuere consectetur elit et enim vel ac.</p>
                                                    <button class="btn btn-dark">Download App
                                                        <i class="fa fa-chevron-right"></i>
                                                    </button>
                                                </div>
                                                <div class="col-md-4">
                                                    <img src={{ asset('mobile.png') }}>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="carousel-caption">
                                            <div class="row">
                                                <div class="col-md-8 card_8">
                                                    <h2 class="text-left"><span class="badge badge-light text-success">20% OFF</span></h2>
                                                    <h1>Free Online Consultation starting at ₹699/month</h1>
                                                    <p>Lorem ipsum dolor sit amet consectetur. Nunc congue at eros vestibulum ut est tristique tristique scelerisque. Ornare fames posuere consectetur elit et enim vel ac.</p>
                                                    <button class="btn btn-dark">Download App
                                                        <i class="fa fa-chevron-right"></i>
                                                    </button>
                                                </div>
                                                <div class="col-md-4">
                                                    <img src={{ asset('mobile.png') }}>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="bg"></div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="carousel-caption" style="background-color: #EDCBB7;">
                                            <div class="row">
                                                <div class="col-md-8 card_8">
                                                    <h2 class="text-left"><span class="badge badge-light text-success">80% OFF</span></h2>
                                                    <h1>Download the App & get ₹100 Health Cash</h1>
                                                    <p>Lorem ipsum dolor sit amet consectetur. Nunc congue at eros vestibulum ut est tristique tristique scelerisque. Ornare fames posuere consectetur elit et enim vel ac.</p>
                                                    <button class="btn btn-dark">Download App
                                                        <i class="fa fa-chevron-right"></i>
                                                    </button>
                                                </div>
                                                <div class="col-md-4">
                                                    <img src={{ asset('mobile.png') }}>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="carousel-caption">
                                            <div class="row">
                                                <div class="col-md-8 card_8">
                                                    <h2 class="text-left"><span class="badge badge-light text-success">20% OFF</span></h2>
                                                    <h1>Free Online Consultation starting at ₹699/month</h1>
                                                    <p>Lorem ipsum dolor sit amet consectetur. Nunc congue at eros vestibulum ut est tristique tristique scelerisque. Ornare fames posuere consectetur elit et enim vel ac.</p>
                                                    <button class="btn btn-dark">Download App
                                                        <i class="fa fa-chevron-right"></i>
                                                    </button>
                                                </div>
                                                <div class="col-md-4">
                                                    <img src={{ asset('mobile.png') }}>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="bg"></div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="carousel-caption" style="background-color: #EDCBB7;">
                                            <div class="row">
                                                <div class="col-md-8 card_8">
                                                    <h2 class="text-left"><span class="badge badge-light text-success">80% OFF</span></h2>
                                                    <h1>Download the App & get ₹100 Health Cash</h1>
                                                    <p>Lorem ipsum dolor sit amet consectetur. Nunc congue at eros vestibulum ut est tristique tristique scelerisque. Ornare fames posuere consectetur elit et enim vel ac.</p>
                                                    <button class="btn btn-dark">Download App
                                                        <i class="fa fa-chevron-right"></i>
                                                    </button>
                                                </div>
                                                <div class="col-md-4">
                                                    <img src={{ asset('mobile.png') }}>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="carousel-caption">
                                            <div class="row">
                                                <div class="col-md-8 card_8">
                                                    <h2 class="text-left"><span class="badge badge-light text-success">20% OFF</span></h2>
                                                    <h1>Free Online Consultation starting at ₹699/month</h1>
                                                    <p>Lorem ipsum dolor sit amet consectetur. Nunc congue at eros vestibulum ut est tristique tristique scelerisque. Ornare fames posuere consectetur elit et enim vel ac.</p>
                                                    <button class="btn btn-dark">Download App
                                                        <i class="fa fa-chevron-right"></i>
                                                    </button>
                                                </div>
                                                <div class="col-md-4">
                                                    <img src={{ asset('mobile.png') }}>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"><i class="fas fa-chevron-left"></i></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"><i class="fas fa-chevron-right"></i></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="doctors mt-5">
        <div class="container main_cont">
            <h1 class="heading">Our Doctors</h1>
            <div class="swiper-container mySwiper mt-5">
                <div class="swiper-wrapper doctorSlide">
                    <div class="swiper-slide">
                        <div class="card" style="width: 18rem; height: 100%;">
                            <img src={{ asset('profile.png') }} class="card-img-top icons">
                            <div class="card-body">
                                <h1 class="card-title">Dr. Steven <span style="font-size: 12px;"> <i class="fa fa-star"></i> 4.3</span></h1>
                                <p class="card-text">General Physician</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card" style="width: 18rem; height: 100%;">
                            <img src={{ asset('profile.png') }} class="card-img-top icons">
                            <div class="card-body">
                                <h1 class="card-title">Dr. Steven <span style="font-size: 12px;"> <i class="fa fa-star"></i> 4.3</span></h1>
                                <p class="card-text">General Physician</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card" style="width: 18rem; height: 100%;">
                            <img src={{ asset('profile.png') }} class="card-img-top icons">
                            <div class="card-body">
                                <h1 class="card-title">Dr. Steven <span style="font-size: 12px;"> <i class="fa fa-star"></i> 4.3</span></h1>
                                <p class="card-text">General Physician</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card" style="width: 18rem; height: 100%;">
                            <img src={{ asset('profile.png') }} class="card-img-top icons">
                            <div class="card-body">
                                <h1 class="card-title">Dr. Steven <span style="font-size: 12px;"> <i class="fa fa-star"></i> 4.3</span></h1>
                                <p class="card-text">General Physician</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card" style="width: 18rem; height: 100%;">
                            <img src={{ asset('profile.png') }} class="card-img-top icons">
                            <div class="card-body">
                                <h1 class="card-title">Dr. Steven <span style="font-size: 12px;"> <i class="fa fa-star"></i> 4.3</span></h1>
                                <p class="card-text">General Physician</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card" style="width: 18rem; height: 100%;">
                            <img src={{ asset('profile.png') }} class="card-img-top icons">
                            <div class="card-body">
                                <h1 class="card-title">Dr. Steven <span style="font-size: 12px;"> <i class="fa fa-star"></i> 4.3</span></h1>
                                <p class="card-text">General Physician</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="consultants">
        <div class="container main_cont">
            <div class="flex-head mb-5">
                <h1 class="heading">15+ Consultants<br> <span>Consult with top doctors across Specialities</span></h1>
                <button class="btn btn-primary" style="height: 40px;">See more Specialities <i class="fa fa-arrow-right"></i></button>
            </div>
            <div #swiperRef="" class="swiper mySwiperConsultants mt-5" style="height: 100%;">
                <div class="swiper-wrapper">
                    <div class="swiper-slide" style="background-color: #DCF1FF; border: 1px solid dodgerblue; border-radius: 6px">
                        <div class="card" style="height: 100%; background-color: #DCF1FF;">
                            <div class="card-body">
                                <img src={{ asset('Fever_.png') }} class="card-img-top consltants_icons">
                                <h1 class="card-title">Fever</h1>
                                <p class="card-text">Lorem ipsum dolor sit amet consectetur. Quisque quis id consectetur.</p>
                                <button class="btn text-primary" style="background-color: transparent;">Consult Now <i class="fa fa-chevron-right"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide" style="background-color: #DCF1FF; border: 1px solid dodgerblue; border-radius: 6px">
                        <div class="card" style="height: 100%; background-color: #DCF1FF;">
                            <div class="card-body">
                                <img src={{ asset('Expectorate_.png') }} class="card-img-top consltants_icons">
                                <h1 class="card-title">Cough</h1>
                                <p class="card-text">Lorem ipsum dolor sit amet consectetur. Quisque quis id consectetur.</p>
                                <button class="btn text-primary" style="background-color: transparent;">Consult Now <i class="fa fa-chevron-right"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide" style="background-color: #DCF1FF; border: 1px solid dodgerblue; border-radius: 6px">
                        <div class="card" style="height: 100%; background-color: #DCF1FF;">
                            <div class="card-body">
                                <img src={{ asset('nose.png') }} class="card-img-top consltants_icons">
                                <h1 class="card-title">Runny Nose</h1>
                                <p class="card-text">Lorem ipsum dolor sit amet consectetur. Quisque quis id consectetur.</p>
                                <button class="btn text-primary" style="background-color: transparent;">Consult Now <i class="fa fa-chevron-right"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide" style="background-color: #DCF1FF; border: 1px solid dodgerblue; border-radius: 6px">
                        <div class="card" style="height: 100%; background-color: #DCF1FF;">
                            <div class="card-body">
                                <img src={{ asset('Vomiting.png') }} class="card-img-top consltants_icons">
                                <h1 class="card-title">Vomiting</h1>
                                <p class="card-text">Lorem ipsum dolor sit amet consectetur. Quisque quis id consectetur.</p>
                                <button class="btn text-primary" style="background-color: transparent;">Consult Now <i class="fa fa-chevron-right"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide" style="background-color: #DCF1FF; border: 1px solid dodgerblue; border-radius: 6px">
                        <div class="card" style="height: 100%; background-color: #DCF1FF;">
                            <div class="card-body">
                                <img src={{ asset('Expectorate_.png') }} class="card-img-top consltants_icons">
                                <h1 class="card-title">Fever</h1>
                                <p class="card-text">Lorem ipsum dolor sit amet consectetur. Quisque quis id consectetur.</p>
                                <button class="btn text-primary" style="background-color: transparent;">Consult Now <i class="fa fa-chevron-right"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </div>
    </div>

    <div class="testimonials mb-5">
        <div class="container">
            <h1 class="heading">Testimonials</h1>
            <div class="row">
                <div class="card col-md-12 mt-2">
                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel" data-interval="100000">
                        <div class="w-100 carousel-inner mb-5" role="listbox">
                            <div class="carousel-item active">
                                <div class="bg"></div>
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="carousel-caption" style="background-color: #fff;">
                                            <div class="top">
                                                <i class="fa-solid fa-quote-left" style="font-size: 32px; color: #4CD4CC;"></i>
                                                <p>This app is excellent for connecting with qualified medical professionals who are located elsewhere.</p>
                                            </div>
                                            <img src={{asset('profile.png')}} class="bottom_img">
                                            <div class="content">
                                                <h3>Rahul Dey</h3>
                                                <div class="s_icons">
                                                    <i class="fa-brands fa-facebook mr-2"></i>
                                                    <i class="fa-brands fa-instagram mr-2"></i>
                                                    <i class="fa-brands fa-twitter"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="carousel-caption" style="background-color: #fff;">
                                            <div class="top">
                                                <i class="fa-solid fa-quote-left" style="font-size: 32px; color: #4CD4CC;"></i>
                                                <p>This app is excellent for connecting with qualified medical professionals who are located elsewhere.</p>
                                            </div>
                                            <img src={{asset('profile.png')}} class="bottom_img">
                                            <div class="content">
                                                <h3>Rahul Dey</h3>
                                                <div class="s_icons">
                                                    <i class="fa-brands fa-facebook mr-2"></i>
                                                    <i class="fa-brands fa-instagram mr-2"></i>
                                                    <i class="fa-brands fa-twitter"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="carousel-caption" style="background-color: #fff;">
                                            <div class="top">
                                                <i class="fa-solid fa-quote-left" style="font-size: 32px; color: #4CD4CC;"></i>
                                                <p>This app is excellent for connecting with qualified medical professionals who are located elsewhere.</p>
                                            </div>
                                            <img src={{asset('profile.png')}} class="bottom_img">
                                            <div class="content">
                                                <h3>Rahul Dey</h3>
                                                <div class="s_icons">
                                                    <i class="fa-brands fa-facebook mr-2"></i>
                                                    <i class="fa-brands fa-instagram mr-2"></i>
                                                    <i class="fa-brands fa-twitter"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="carousel-caption" style="background-color: #fff;">
                                            <div class="top">
                                                <i class="fa-solid fa-quote-left" style="font-size: 32px; color: #4CD4CC;"></i>
                                                <p>This app is excellent for connecting with qualified medical professionals who are located elsewhere.</p>
                                            </div>
                                            <img src={{asset('profile.png')}} class="bottom_img">
                                            <div class="content">
                                                <h3>Rahul Dey</h3>
                                                <div class="s_icons">
                                                    <i class="fa-brands fa-facebook mr-2"></i>
                                                    <i class="fa-brands fa-instagram mr-2"></i>
                                                    <i class="fa-brands fa-twitter"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"><i class="fas fa-chevron-left"></i></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"><i class="fas fa-chevron-right"></i></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</Section>
@endsection