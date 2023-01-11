@extends('main')
@section('title', 'Home')
@section('pagestyles')
<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap');

    body {
        color: #1F2161;
        transition: all 1s;
        font-family: "Poppins", sans-serif;
    }

    p {
        text-align: justify;
    }

    a {
        color: #0F773C;
    }

    a:hover {
        color: #CB831E;
        text-decoration: none;
    }

    .card {
        margin: 0 auto;
        border: 2px solid #e7e7e7;
        position: relative;
        display: flex;
        justify-content: center;
        align-items: center;
        margin-bottom: 20px;
    }

    .card-body {
        overflow: hidden;
        display: flex;
        flex-direction: column;
    }

    .card-title {
        margin-top: 2rem;
        font-size: 16px;
        font-weight: 700;
        text-transform: uppercase;
        line-height: 1.1;
        letter-spacing: 0;
        text-align: center;
    }

    .card .card-icon {
        font-size: 60px;
        color: #d3d3d4;
        transition: all .2s ease-in;
    }

    .card:hover .card-icon {
        transform: scale(1.2);
    }


    /***** Nav *****/
    /* NOTE: smooth css animations */
    @keyframes swing {
        0% {
            transform: rotate(0deg);
        }

        10% {
            transform: rotate(10deg);
        }

        30% {
            transform: rotate(0deg);
        }

        40% {
            transform: rotate(-10deg);
        }

        50% {
            transform: rotate(0deg);
        }

        60% {
            transform: rotate(5deg);
        }

        70% {
            transform: rotate(0deg);
        }

        80% {
            transform: rotate(-5deg);
        }

        100% {
            transform: rotate(0deg);
        }
    }

    .htmlBody #sidebarWrapper,
    #sidebarWrapper .sidebar-brand>a,
    .htmlBody .page-content,
    #sidebarWrapper .navMenu ul li a,
    #show-sidebar,
    #close-sidebar {
        -webkit-transition: all 0.3s ease;
        -moz-transition: all 0.3s ease;
        -ms-transition: all 0.3s ease;
        -o-transition: all 0.3s ease;
        transition: all 0.3s ease;
    }

    /***** When sidebar is toggled *****/
    .htmlBody.toggled #sidebarWrapper {
        left: -15px;
        position: relative;
    }

    @media screen and (min-width: 768px) {
        .htmlBody.toggled .page-content {
            padding-left: 300px;
        }
    }



    /***** Open/Close Sidebar *****/
    #show-sidebar {
        position: absolute;
        left: -15px;
        top: 5px;
        border-radius: 0 4px 4px 0px;
        width: 2.5rem;
        transition-delay: 0.3s;
        z-index: 2;
        background-color: #102A83;
        color: #FEFDFB;
        font-size: 1.3em;
        padding-bottom: 0;
    }

    #hamburger {
        margin-bottom: 0;
    }

    .htmlBody.toggled #show-sidebar {
        left: -60px;
    }

    .htmlBody {
        position: relative;
        margin-bottom: 100px;
    }

    .htmlBody.toggled #close-sidebar:hover {
        color: #0F773C;
    }





    /***** Sidebar: general *****/
    #sidebarWrapper {
        width: 100%;
        height: 100%;
        max-height: 100%;
        position: absolute;
        top: 0;
        left: -300px;
        z-index: 2;
        overflow-y: auto;
        background: #fff;
    }

    .navHeader {
        font-size: 16px;
    }

    #sidebarWrapper ul {
        list-style-type: none;
        padding: 0;
        margin: 0;
        padding-left: 35px;
    }



    /***** Sidebar brand & logo *****/
    #sidebarWrapper .sidebar-brand {
        padding: 10px 20px;
        display: flex;
        align-items: center;
    }

    #sidebarWrapper .sidebar-brand>a {
        text-transform: uppercase;
        font-weight: bold;
        flex-grow: 1;
    }

    #sidebarWrapper .sidebar-brand #close-sidebar {
        cursor: pointer;
        font-size: 1.5rem;
    }

    .sidebar-logo {
        margin-top: 0;
    }



    /***** Sidebar nav links *****/
    .navMenu {
        padding-bottom: 10px;
    }

    .navMenu ul li {
        border-bottom: 1px solid rgba(0, 0, 0, 0.08);
        padding-bottom: 10px;
        padding-top: 10px;
    }

    .navMenu ul li a {
        padding: 8px 30px 8px 20px;

    }

    .active {
        background-color: transparent;
    }

    .active .nav-link {
        color: dodgerblue;
    }

    .active:hover>.nav-link {
        color: dodgerblue;
    }

    .sidebar-brand>a,
    .navMenu ul li a {
        color: #777;
        transition: none;
    }

    .navMenu ul li:hover>a {
        color: dodgerblue;
        transition: none;
    }

    .dct {
        display: flex;
        flex-direction: column;
    }

    .dct h6 {
        margin-bottom: 0;
        color: #272b41;
    }

    .dct p {
        color: #888;
        display: block;
        font-size: 12px;
        margin-top: 3px;
        margin: 0;
    }

    .dct-img {
        width: 2.5rem;
        height: 2.5rem;
        border-radius: 100%;
        margin-right: 0.5rem !important;
    }

    .dct-file {
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        display: -webkit-inline-box;
        display: -ms-inline-flexbox;
        display: inline-flex;
        font-size: inherit;
        font-weight: 400;
        margin: 0;
        padding: 0;
        vertical-align: middle;
        white-space: nowrap;
        width: 100%;
    }

    .table thead tr td,
    .table thead tr th {
        border-top: 1px solid #dee2e6 !important;
    }
</style>
@endsection
@section('content')
<Section id="medicalRecords">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3">
                <div class="htmlBody toggled">
                    <nav id="sidebarWrapper">
                        <div class="sidebar-content">
                            <div class="sidebar-brand">
                                <div id="close-sidebar">
                                    <h4 class="navHeader mt-4 pl-2">
                                        My Account
                                    </h4>
                                </div>
                            </div>
                            <div class="navMenu">
                                <ul>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{route('patient.dashboard' , 'en' )}}">
                                            <i class="fa-solid fa-chart-column mr-1"></i>
                                            Dashboard
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{route('patient.appointments' , 'en' )}}">
                                            <i class="fa-solid fa-calendar-days mr-1"></i>
                                            Appointments
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{route('patient.prescription','en')}}">
                                            <i class="fa-solid fa-file-pen mr-1"></i>
                                            Prescriptions
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{route('patient.medicalRecords','en')}}">
                                            <i class="fa-solid fa-file-medical mr-1"></i>
                                            Medical Records
                                        </a>
                                    </li>
                                    <li class="nav-item active">
                                        <a class="nav-link" href="#">
                                            <i class="fa-solid fa-file-invoice mr-1"></i>
                                            Billing
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="./rumpsession.html">
                                            <i class="fa-solid fa-right-from-bracket mr-1"></i>
                                            Logout
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <!-- END navMenu  -->
                        </div>
                        <!-- END sidebar-content  -->
                    </nav>
                    <!-- END .page-content -->
                </div>
                <!-- END whole page wrapper -->
            </div>
            <div class="col-lg-9 mt-5">
                <div class="row">
                    <div class="col-12 col-md-12">
                        <table class="table table-hover border">
                            <thead>
                                <tr>
                                    <th scope="col">Invoice No</th>
                                    <th scope="col">Doctor</th>
                                    <th scope="col">Amount</th>
                                    <th scope="col">Paid On</th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>#INV-0010</td>
                                    <td scope="row" class="dct-file">
                                        <img class="dct-img" src="https://doccure-html.dreamguystech.com/template/assets/img/doctors/doctor-thumb-01.jpg">
                                        <div class="dct">
                                            <h6>Dr. Babu Sk</h6>
                                            <p>PHP</p>
                                        </div>
                                    </td>
                                    <td>₹<span>160</span></td>
                                    <td>19 Jan 2023</td>
                                    <td>
                                        <button class="btn btn-sm btn-success">
                                            <i class="fa-solid fa-eye"></i>
                                            View
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>#INV-0010</td>
                                    <td scope="row" class="dct-file">
                                        <img class="dct-img" src="https://doccure-html.dreamguystech.com/template/assets/img/doctors/doctor-thumb-01.jpg">
                                        <div class="dct">
                                            <h6>Dr. Babu Sk</h6>
                                            <p>PHP</p>
                                        </div>
                                    </td>
                                    <td>₹<span>160</span></td>
                                    <td>19 Jan 2023</td>
                                    <td>
                                        <button class="btn btn-sm btn-success">
                                            <i class="fa-solid fa-eye"></i>
                                            View
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>#INV-0010</td>
                                    <td scope="row" class="dct-file">
                                        <img class="dct-img" src="https://doccure-html.dreamguystech.com/template/assets/img/doctors/doctor-thumb-01.jpg">
                                        <div class="dct">
                                            <h6>Dr. Babu Sk</h6>
                                            <p>PHP</p>
                                        </div>
                                    </td>
                                    <td>₹<span>160</span></td>
                                    <td>19 Jan 2023</td>
                                    <td>
                                        <button class="btn btn-sm btn-success">
                                            <i class="fa-solid fa-eye"></i>
                                            View
                                        </button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</Section>
@endsection

@section('pagescripts')
@endsection