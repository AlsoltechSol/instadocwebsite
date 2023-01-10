@extends('main')
@section('title', 'Home')
@section('pagestyles')

@endsection
@section('content')
    <Section id="medicalVisit">
        <div class="container mt-2">
            <div class="heading">{{__('msg.med-visit')}}</div>
            <form method="POST" action="{{ route('medical.visits') }}" enctype="multipart/form-data">
                <div class="row">
                    @csrf
                    <div class="col-md-12">
                        @if ($message = Session::get('success'))
                            <div class="alert alert-success alert-block">
                                <button type="button" class="close" data-dismiss="alert">×</button>
                                <strong>{{ $message }}</strong>
                            </div>
                        @endif
                        <div class="row">
                            <div class="col-md-6 mb-1">
                                <label for="FullName" class="form-label">Full Name</label>
                                <input name="name" type="text" class="form-control" id="FullName"
                                    placeholder="Enter Full name" required>
                            </div>
                            <div class="col-md-6 mb-1">
                                <label for="Date" class="form-label">Patient Passport No.</label>
                                <input name="patient_passport_no" type="text" class="form-control" id="Date"
                                    placeholder="Passport No." required>
                            </div>
                            <div class="col-md-6 mb-1">
                                <label for="Dest" class="form-label">Attender Name</label>
                                <input name="attender_name" type="text" class="form-control" id="Dest"
                                    placeholder="Enter Full Name" required>
                            </div>
                            <div class="col-md-6 mb-1">
                                <label for="country" class="form-label">Attender Passport No.</label>
                                <input name="attender_passport_no" type="text" class="form-control" id="country"
                                    placeholder="Passport No." required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label" for="inputGroupFile01">Upload Passport</label>
                                <div class="input-group mb-1">
                                    <div class="custom-file">
                                        <input name="passport_image" type="file" class="custom-file-input"
                                            id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                                        <label class="custom-file-label" for="inputGroupFile01">Supported files pdf, jpg and
                                            png</label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12" style="display:flex;justify-content: flex-end;">
                                <button class="btn btn-outline-secondary mr-2 px-4">
                                    Cancel
                                </button>
                                <button type="submit" class="btn btn-primary px-5">
                                    Save
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </Section>
@endsection
