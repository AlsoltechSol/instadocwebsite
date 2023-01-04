<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- google fonts -->
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
<!-- Favicon -->
<link rel="shortcut icon" type="image/x-icon" href="{{ asset('frontend/assets/images/logo/logo2.png') }}">
<!-- Other css -->
<link rel="stylesheet" href="{{ asset('/frontend/assets/css/animate.css') }}">
<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"> -->
<link rel="stylesheet" href="{{ asset('/frontend/assets/css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('/frontend/assets/css/icofont.min.css') }}">
<link rel="stylesheet" href="{{ asset('/frontend/assets/css/swiper.min.css') }}">
<link rel="stylesheet" href="{{ asset('/frontend/assets/css/hc-offcanvas-nav.css') }}">
<link rel="stylesheet" href="{{ asset('/frontend/assets/css/style.css') }}">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">
<style>
    /* Navbar */
    .btn-group-nav {
        display: flex;
        flex-direction: row;
        border-radius: 20px;
        width: 100%;
        justify-content: space-between;
        padding-top: 20px;
    }

    .btn-group-nav #paitent_btn{
        width: 48%;
    }
    .btn-group-nav #doc_btn{
        width: 48%;
    }

    .header-top {
        padding: 10px 0 !important;
    }

    .goog-logo-link {
        display: none !important;
    }

    .goog-te-gadget {
        color: transparent !important;
    }

    .lab-btn {
        color: #fff !important;
    }

    /* .header-section .header-top .row{
        flex-direction: row;
    }
    .header-logo{
        width: 20% !important;
    } */

    .header-top .row>* {
        width: auto;
    }

    a {
        text-decoration: none;
    }

    .main-menu {
        justify-content: left;
    }

    .form-control {
        border-width: 2px;
        border-color: #c9c9c9;
    }

    .form-label {
        margin-bottom: 0.5rem;
        font-size: 18px;
        font-weight: 600;
        letter-spacing: 1px;
        color: #000;
    }

    .contact-us .contact-wrap .contact-title,
    .widget,
    .comment-respond,
    .comments,
    .blog-section .main-blog .blog-wrapper .post-item .post-item-inner .post-content blockquote,
    .blog-section .main-blog .blog-wrapper .post-item .post-item-inner .post-content p,
    .blog-section .main-blog .blog-wrapper .post-item .post-item-inner,
    .section-header,
    .fore-zero .section-wrapper .zero-item .zero-content p,
    .shop-single .review .review-content .review-showing .client-review .review-form form .rating,
    .shop-single .review .review-content .review-showing .content,
    .shop-page .shop-product-wrap .product-item,
    .shop-page .shop-product-wrap .product-list-item,
    .shop-page .shop-title,
    .shop-cart .section-wrapper .cart-bottom .shiping-box .calculate-shiping h3,
    .contact-us .section-wrapper .here-form h3,
    .certificat-section .certificate-content p,
    .blog-section .main-blog .blog-wrapper .service-item .service-item-inner,
    .appointment-section.style-1 .section-wrapper .appointment-right form select,
    .appointment-section.style-1 .section-wrapper .appointment-right .ar-title,
    .appointment-section.style-1 .section-wrapper .appointment-left .time-info .al-title,
    .single-sidebar .letest-product,
    .single-sidebar .shop-widget,
    .single-sidebar .timetable-widget,
    .single-sidebar .popular-post-widget,
    .single-sidebar .gellary-widget,
    .single-sidebar .cetagory-widget,
    .single-sidebar .department-widget,
    .single-sidebar .search-widget,
    .feature-item .lab-inner .lab-thumb,
    .feature-item,
    input,
    textarea {
        margin-bottom: 20px;
    }

    @media only screen and (max-width: 600px) {

        .contact-us .contact-wrap .contact-title,
        .widget,
        .comment-respond,
        .comments,
        .blog-section .main-blog .blog-wrapper .post-item .post-item-inner .post-content blockquote,
        .blog-section .main-blog .blog-wrapper .post-item .post-item-inner .post-content p,
        .blog-section .main-blog .blog-wrapper .post-item .post-item-inner,
        .section-header,
        .fore-zero .section-wrapper .zero-item .zero-content p,
        .shop-single .review .review-content .review-showing .client-review .review-form form .rating,
        .shop-single .review .review-content .review-showing .content,
        .shop-page .shop-product-wrap .product-item,
        .shop-page .shop-product-wrap .product-list-item,
        .shop-page .shop-title,
        .shop-cart .section-wrapper .cart-bottom .shiping-box .calculate-shiping h3,
        .contact-us .section-wrapper .here-form h3,
        .certificat-section .certificate-content p,
        .blog-section .main-blog .blog-wrapper .service-item .service-item-inner,
        .appointment-section.style-1 .section-wrapper .appointment-right form select,
        .appointment-section.style-1 .section-wrapper .appointment-right .ar-title,
        .appointment-section.style-1 .section-wrapper .appointment-left .time-info .al-title,
        .single-sidebar .letest-product,
        .single-sidebar .shop-widget,
        .single-sidebar .timetable-widget,
        .single-sidebar .popular-post-widget,
        .single-sidebar .gellary-widget,
        .single-sidebar .cetagory-widget,
        .single-sidebar .department-widget,
        .single-sidebar .search-widget,
        .feature-item .lab-inner .lab-thumb,
        .feature-item,
        input,
        textarea {
            margin-bottom: 30px;
        }

        #medicalVisit .container {
            width: 100%;
            padding-right: 15px;
            padding-left: 15px;
            margin-right: auto;
            margin-left: auto;
            margin-top: 30% !important;
        }

        #medicalVisit .heading {
            font-size: 24px;
            margin-bottom: 20px;
            padding-left: 10px;
        }

        #medicalVisit .heading::before {
            content: "";
            width: 4px;
            height: 100%;
            background-color: #D11212;
            position: absolute;
            left: 0;
            border-radius: 20px;
        }
    }

    .heading {
        font-family: 'Poppins', sans-serif;
        font-weight: 600;
        font-size: 34px;
        color: #000000;
        position: relative;
        padding-left: 20px;
        margin-bottom: 25px;
        margin-top: 25px;
    }

    .heading::before {
        content: "";
        width: 4px;
        height: 100%;
        background-color: #D11212;
        position: absolute;
        left: 0;
        border-radius: 20px;
    }

    .sec-heading {
        font-size: 28px;
        font-weight: 600;
        color: #000000;
        font-family: "Poppins", sans-serif;
        margin-bottom: 10px;
    }


    .table {
        margin-bottom: 0;
    }

    .dashboard-card {
        box-shadow: 0px 2px 24px rgba(0, 0, 0, 0.2);
        border-radius: 10px;
        margin-bottom: 0;
    }

    .dashboard-card .card-body {
        display: flex;
        width: 100%;
        justify-content: space-between;
        align-items: center;
        padding: 0 1.25rem;
    }

    .dashboard-card .card-body h1 {
        margin-bottom: 0;
        font-size: 48px;
    }

    .dashboard-card .card-body p {
        font-size: 48px;
        font-weight: 600;
        font-size: 16px;
        color: #000;
    }

    .testList-card {
        box-shadow: 0px 2px 24px rgba(0, 0, 0, 0.2);
        border-radius: 10px;
        border: 2px solid #000;
    }

    .table thead tr td,
    .table thead tr th {
        border-top: 1px solid transparent;
    }

    .btn-group,
    .btn-group-vertical {
        display: flex;
        flex-direction: column;
        border-radius: 20px;
    }

    .card-body {
        overflow: hidden;
    }

    .btn-transparent:not(:disabled):not(.disabled).active,
    .btn-transparent:not(:disabled):not(.disabled):active,
    .show>.btn-transparent.dropdown-toggle {
        background-color: dodgerblue;
        color: #fff;
    }

    .btn-transparent {
        background-color: transparent;
        border-color: transparent;
    }


    .icon-chevron {
        display: block;
        width: 15px;
        height: 22px;
        background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA8AAAAWCAMAAAAo0TYrAAAAElBMVEX///8AAAAAAAAAAAAAAAAAAABknMCaAAAABXRSTlMAEHCg0O5XV0MAAAAzSURBVHgBYwACJkYGZMDMysKIwmUFCyC4KAIsrKgCjPQQQPCpzUX4B9O/mOGBGV7o4QkA5zcCv3HiEZgAAAAASUVORK5CYII=);
    }

    .icon-chevron-rotate {
        transform: rotate(180deg);
    }

    .page {
        width: 500px;
        margin: 0 auto;
        padding: 1em;
    }

    .responsive-calendar-placeholder {}

    .responsive-calendar-modal {
        background-color: #1d86c8;
        color: white;
        padding: 1em;
    }

    .responsive-calendar .controls {
        text-align: center;
    }

    .responsive-calendar .controls a {
        cursor: pointer;
        color: red;
    }

    .responsive-calendar .controls h4 {
        display: inline;
    }

    .responsive-calendar .day-headers,
    .responsive-calendar .days {
        font-size: 0;
    }

    .responsive-calendar .day {
        display: inline-block;
        position: relative;
        font-size: 14px;
        width: 14.285714285714286%;
        text-align: center;
    }

    .responsive-calendar .day a {
        color: #000000;
        display: block;
        cursor: pointer;
        padding: 20% 0 20% 0;
    }

    .responsive-calendar .day a:hover {
        background-color: #eee;
        text-decoration: none;
    }

    .responsive-calendar .day.header {
        border-bottom: 1px gray solid;
    }

    .responsive-calendar .day.active a {
        background-color: #1d86c8;
        color: #ffffff;
    }

    .responsive-calendar .day.active a:hover {
        background-color: #36a0e2;
    }

    .responsive-calendar .day.active .not-current {
        background-color: #8fcaef;
        color: #ffffff;
    }

    .responsive-calendar .day.active .not-current:hover {
        background-color: #bcdff5;
    }

    .responsive-calendar .day.not-current a {
        color: #ddd;
    }

    .responsive-calendar .day .badge {
        position: absolute;
        top: 2px;
        right: 2px;
        z-index: 1;
    }


    /* video Conslut */
    .doc {
        display: flex;
    }

    .doc-pic {
        width: 81px;
    }

    .headLeft {
        display: flex;
        flex-direction: column;
        flex-wrap: wrap;
        align-content: flex-start;
        align-items: flex-start;
        justify-content: center;
    }

    .headRight {
        display: flex;
        justify-content: flex-end;
    }

    .headLeft h1 {
        font-size: 40px;
        font-weight: bold;
        font-family: 'Poppins', sans-serif;
        line-height: 45px;
    }

    .headLeft h3 {
        color: #333;
        font-size: 24px;
        font-weight: 500;
        font-family: "Poppins", sans-serif;
        margin-bottom: 20px;
    }

    .headLeft .doc {
        margin-bottom: 20px;
        display: flex;
        flex-direction: row;
        justify-content: space-evenly;
    }

    .headLeft .doc h4 {
        margin-left: 15px;
    }

    /* Btn */
    @media (min-width: 576px) {
        .modal-dialog {
            max-width: 400px;
        }

        .modal-dialog .modal-content {
            padding: 1rem;
        }
    }

    .modal-header .close {
        margin-top: -1.5rem;
    }

    .form-title {
        margin: -2rem 0rem 2rem;
    }

    .btn-round {
        border-radius: 3rem;
    }

    .delimiter {
        padding: 1rem;
    }

    .social-buttons .btn {
        margin: 0 0.5rem 1rem;
    }

    .signup-section {
        padding: 0.3rem 0rem;
    }
</style>