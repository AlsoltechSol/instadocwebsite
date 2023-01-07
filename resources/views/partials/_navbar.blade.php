<!-- ========== Mobile-nav section start here ========== -->
<div class="mobile-menu">
    <div class="container">
        <div class="mobile-menu-wrapper">
            <div class="logo">
                <a href="index.html">
                    <img style="width: 120px !important;" src="{{ asset('/frontend/assets/images/logo/logo-4.png') }}" alt="Mukti">
                </a>
            </div>
            <div class="open-menu"><i class="icofont-navigation-menu"></i></div>
        </div>
        <nav id="mobile-nav">
            <ul class="home-nav">
                <li class="active">
                    <a href="/">Home</a>

                </li>
                <li><a href="#about">About</a></li>

                <li><a href="#services">Services</a></li>
                <li><a href="#contact">Contact</a></li>

            </ul>
            <button type="button" class="btn btn-light" style="height: fit-content; padding: 0.375rem 26px !important;" data-toggle="modal" data-target="#loginModal">
                Login
            </button>


        </nav>
    </div>
</div>
<!-- ========== Mobile-nav section end here ========== -->


<!-- ==========Header Section Starts Here========== -->
<header class="header-section d-none d-lg-block">
    <div class="header-top">
        <div class="container">
            <div class="row justify-content-between align-items-center px-15">
                <div class="header-logo">
                    <a href="/" style="width: 120px !important" class="logo"><img src="{{ asset('frontend/assets/images/logo/logo-4.png') }}" alt="logo"></a>
                </div>
                <ul class="header-contact-info d-flex align-items-center">
                    <li class="item">
                        <div class="item-inner">
                            <div class="item-thumb">
                                <img src="assets/images/header/1.png" alt="">
                            </div>
                            <div class="item-content">
                                <span>Contact No:</span>
                                <a href="tel:7865958508">
                                    <p>7865958508</p>
                                </a>

                            </div>
                        </div>
                    </li>
                    <li class="item">
                        <div class="item-inner">
                            <div class="item-thumb">
                                <img src="assets/images/header/1.png" alt="">
                            </div>
                            <div class="item-content">
                                <span>Whatsapp:</span>
                                <a href="tel:7865958508">
                                    <p>8509648067</p>
                                </a>

                            </div>
                        </div>
                    </li>
                    <li class="item">
                        <div class="item-inner">
                            <div class="item-thumb">
                                <img src="assets/images/header/2.png" alt="">
                            </div>
                            <div class="item-content">
                                <span>Email :</span>
                                <a href="mail-to:support@instadoctor.co">
                                    <p>support@instadoctor.co</p>
                                </a>
                            </div>
                        </div>
                    </li>
                    <li class="item">
                        <div class="item-inner">
                            <div class="item-thumb">
                                <img src="assets/images/header/2.png" alt="">
                            </div>
                            <div class="item-content">

                                <span>Language :</span><br>
                                {{-- <select id="selectbox" name="" id="lanSelect" onchange="javascript:location.href = this.value;">
                           
                                        <option >Select Language</option>
                                        <option value="/en">English</option>
                                        <option value="/bn">Bengali</option>
                                        <option value="/ni">Nepali</option>
                                    </select> --}}
                                <select id="selectbox" name="" onchange="javascript:location.href = this.value;">
                                    <option value="/en" <?php if (url()->full() == "http://127.0.0.1:8000/en") {
                                                            echo "selected";
                                                        }else if (url()->full() == "http://127.0.0.1:8000/DocConsultForm/en") {
                                                            echo "selected";
                                                        } 
                                                        else if (url()->full() == "http://127.0.0.1:8000/VideoConsult/en") {
                                                            echo "selected";
                                                        }else {
                                                            echo "";
                                                        } ?>>English</option>
                                    <option value="/bn" <?php if (url()->full() == "http://127.0.0.1:8000/bn") {
                                                            echo "selected";
                                                        }
                                                        else if (url()->full() == "http://127.0.0.1:8000/DocConsultForm/bn") {
                                                            echo "selected";
                                                        } else if (url()->full() == "http://127.0.0.1:8000/VideoConsult/bn") {
                                                            echo "selected";
                                                        }
                                                        else {
                                                            echo "";
                                                        } ?>>Bengali</option>
                                    <option value="/ni" <?php if (url()->full() == "http://127.0.0.1:8000/ni") {
                                                            echo "selected";
                                                        }
                                                        else if (url()->full() == "http://127.0.0.1:8000/DocConsultForm/ni") {
                                                            echo "selected";
                                                        } else if (url()->full() == "http://127.0.0.1:8000/VideoConsult/ni") {
                                                            echo "selected";
                                                        }
                                                        else {
                                                            echo "";
                                                        } ?>>Nepali</option>
                                </select>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="header-bottom">
        <nav class="container">
            <div class="primary-menu">
                <div class="menu-area">
                    <div class="row justify-content-between px-15" style="align-items: center;">
                        <ul class="main-menu d-flex">
                            <li class="active">
                                <a href="/">Home</a>

                            </li>
                            <li><a href="#about">About</a></li>

                            <li><a href="#services">Services</a>

                            </li>
                            <li><a href="#contact">Contact</a>

                            </li>
                        </ul>
                        <button type="button" class="btn btn-light" style="height: fit-content; padding: 0.375rem 26px !important;" data-toggle="modal" data-target="#loginModal">
                            Login
                        </button>


                    </div>
                </div>
            </div>
        </nav>
    </div>

    <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header border-bottom-0">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form class="form-signin">
                        <!-- Nav tabs -->
                        <ul class="nav nav-pills mb-4">
                            <li class="nav-item pill-1">
                                <a class="nav-link active rounded-0" data-toggle="tab" href="#login">Paitent Login</a>
                            </li>
                            <li class="nav-item pill-2">
                                <a class="nav-link  rounded-0" data-toggle="tab" href="#register">Doctor Login</a>
                            </li>
                        </ul>
                        <!-- Tab panes -->
                        <div class="tab-content">

                            <!-- Tab1 -->
                            <div id="login" class="container tab-pane active">
                                <form action="{{route('patient.login')}}" method="POST">
                                    @csrf
                                    <label for="inputEmail" class="sr-only">Mobile Number</label>
                                    <input name="mobile" type="number" id="inputEmail" class="form-control mb-4" placeholder="Mobile Number" required autofocus>
                                    <button class="btn btn-lg btn-dark btn-block" type="submit">Paitent Login</button>
                                </form>
                              
                            </div>

                            <!-- Tab2 -->
                            <div id="register" class="container tab-pane fade">
                                <form action="{{route('doctor.login')}}" method="POST">
                                    @csrf
                                    <label for="inputEmail" class="sr-only">Mobile Number</label>
                                    <input name="mobile" type="number" id="inputEmail" class="form-control mb-4" placeholder="Mobile Number" required autofocus>
                                    <button class="btn btn-lg btn-dark btn-block" type="submit">Doctor Login</button>
                                </form>
                            </div>
                        </div>

                    </form>
                    <div class="modal-footer d-flex justify-content-center">
                        <div class="signup-section">Not a member yet? <a href="#a" class="text-info"> Sign Up</a>.</div>
                    </div>
                </div>
            </div>
</header>