@extends('main')
@section('title', 'Home')
@section('pagestyles')

@endsection
@section('content')
    <Section id="medicalVisit">
        <div class="container mt-2">
            <div class="heading">{{__('msg.lab-test')}}</div>
            <form method="POST" action="{{ route('lab.test') }}" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success alert-block">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            <strong>{{ $message }}</strong>
                        </div>
                    @endif
                    <div class="col-md-12">
                        <div class="row">

                            <div class="col-md-6 mb-3">
                                <label class="form-label" for="inputGroupFile01">Upload Insta Doctor
                                    prescription</span></label>
                                <div class="input-group mb-1">
                                    <div class="custom-file">
                                        <input name="prescription" type="file" class="custom-file-input"
                                            id="inputGroupFile01" aria-describedby="inputGroupFileAddon01" required>
                                        <label class="custom-file-label" for="inputGroupFile01">Upload</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mb-1">
                                <label for="name" class="form-label">Requested for (patient name)</label>
                                <input name="name" type="text" class="form-control" id="name"
                                    placeholder="Patient Name" required>
                            </div>
                            <div class="col-md-6 mb-1">
                                <label for="Date" class="form-label">Date of Appointment</label>
                                <input name="appointment_date" type="date" class="form-control" id="Date"
                                    placeholder="Date" required>
                            </div>
                            <div class="col-md-6 mb-1">
                                <label for="Dest" class="form-label">Name of Lab Center</label>
                                <input name="lab_center" type="text" class="form-control" id="Dest"
                                    placeholder="Name of Lab Center" required>
                            </div>
                            <div class="col-md-6 mb-1">
                                <label for="country" class="form-label">Alternative Contact No.</label>
                                <input name="alt_mobile" type="text" class="form-control" id="country"
                                    placeholder="Mobile number" required>
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
