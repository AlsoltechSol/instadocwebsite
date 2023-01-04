@extends('main')
@section('title',"Home")


@section('pagestyles')



@endsection

@section('content')

<Section id="VideoConsult" style="background-color: #C8EEF7;">
    <div class="container">
        <div class="row">
            <div class="col-md-6 headLeft">
                <h1>Just Stay Home & Request Medical Advice Online</h1>
                <h3>Get your consultation at just ₹ 400</h3>
                <div class="doc">
                    <img src={{ asset('doctors.png') }} class="doc-pic">
                    <h4>+1000 Doctors Online</h4>
                </div>
                <button class="btn btn-primary">Consult Now
                    <i class="fa fa-chevron-right"></i>
                </button>
            </div>
            <div class="col-md-6 headRight">
                <img src={{ asset('vdoConsultHome.png') }}>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">

            </div>
        </div>
    </div>
</Section>
@endsection