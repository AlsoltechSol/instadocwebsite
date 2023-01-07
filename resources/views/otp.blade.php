@extends('main')
@section('title',"Home")


@section('pagestyles')

<style>
    body {
        background: #c2e9fb;
        background-image: linear-gradient(120deg, #a1c4fd 0%, #c2e9fb 100%);
        color: black;
        font-family: 'Rubik', sans-serif !important;
        margin-top: 0 !important;
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .container {
        display: flex;
        height: 100%;
        align-items: center;
        justify-content: center;
    }

    .form-signin {
        background: white;
        padding: 50px 80px;
    }

    .logo {
        width: 200px;
    }

    .one-line {
        display: flex;
    }

    .forgot {
        margin-left: auto;
    }

    .mobile-menu {
        display: none;
    }

    .footer-section {
        display: none;
    }

    .header-section {
        display: none !important;
    }

    @media only screen and (max-width: 576px) {
        .form-signin {
            min-width: 360px;
            flex-wrap: wrap;
            padding: 50px 0px;
        }

        .mobile-menu {
            display: none;
        }

        .footer-section {
            display: none;
        }

    }

    /* not active */
    .nav-pills .pill-1 .nav-link:not(.active) {
        border: none;
        color: #6c757d !important;
        font-weight: 700;
        transition: width 0.4s;
    }

    .nav-pills .pill-2 .nav-link:not(.active) {
        border: none;
        color: #6c757d !important;
        font-weight: 700;
        transition: width 0.4s;
    }


    /* active (faded) */
    .nav-pills .pill-1 .nav-link {
        background: white !important;
        border-bottom: 4px solid #007bff;
        color: #212529 !important;
        font-size: 18px;
        font-weight: 700;
    }

    .nav-pills .pill-2 .nav-link {
        background: white !important;
        border-bottom: 4px solid #007bff;
        color: #212529 !important;
        font-size: 18px;
        font-weight: 700;
    }

    .nav-pills .pill-1 .nav-link:hover {
        color: #212529 !important;
        width: 100%;
        border-bottom: 4px solid #007bff;

    }

    .nav-pills .pill-2 .nav-link:hover {
        color: #212529 !important;
        width: 100%;
        border-bottom: 4px solid #007bff;
    }


    .nav {
        padding: 0 15px !important;
    }
</style>

@endsection

@section('content')

<div class="container">

    <form class="form-signin rounded-sm shadow">
        <div class="mx-auto" style="width:200px"><img class="mb-4 logo" src="{{ asset('/frontend/assets/images/logo/logo-4.png') }}"></div>
        <div class="tab-content">

            <!-- Tab1 -->
            <div id="login" class="container tab-pane active">
                <label for="inputnumber" class="sr-only">Enter OTP</label>
                <input type="number" id="inputnumber" class="form-control mb-4" placeholder="Enter OTP" required autofocus>
                <button class="btn btn-lg btn-dark btn-block" type="submit">Login</button>
                <p class="mt-4 mb-0 text-muted small">InstaDoc works best with Google Chrome, Mozilla Firefox and Safari</p>
            </div>
        </div>

    </form>
</div><!-- /.container -->

@endsection


@section('pagescripts')



@endsection