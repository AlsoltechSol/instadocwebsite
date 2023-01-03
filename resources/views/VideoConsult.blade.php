@extends('main')
@section('title',"Home")


@section('pagestyles')



@endsection

@section('content')

<Section id="VideoConsult">
    <div class="container-fluid mt-0">
        <div class="row" style="background-color: #C8EEF7;">
            <div class="col-md-6">
                <h1>Just Stay Home!</h1>
                <h2>Request Medical advice online</h2>
                <h3>Get your consultation at just ₹ 400</h3>
                <div class="doc">
                    <img src={{ asset('doctors.png') }} class="doc-pic">
                    <h4>+1000 Doctors Online</h4>
                </div>
                <button class="btn btn-primary">Consult Now
                    <i class="fa fa-chevron-right"></i>
                </button>
            </div>
            <div class="col-md-6">
                <img src={{ asset('vdoConsultHome.png') }}>
            </div>
        </div>
    </div>
</Section>
@endsection