@extends('main')
@section('title',"Home")
@section('pagestyles')

@endsection
@section('content')
<Section id="medicalVisit">
    <div class="container mt-2">
        <div class="heading">Request For Visa</div>
        <form method="POST" action="#">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-6">
                            <label for="FullName" class="form-label">Full Name</label>
                            <input type="text" class="form-control" id="FullName" placeholder="Enter Full name">
                        </div>
                        <div class="col-md-6">
                            <label for="Date" class="form-label">Expected Date of Travel</label>
                            <input type="date" class="form-control" id="Date" placeholder="Date of Travel">
                        </div>
                        <div class="col-md-6">
                            <label for="Dest" class="form-label">Destination Location</label>
                            <input type="text" class="form-control" id="Dest" placeholder="Enter your destination">
                        </div>
                        <div class="col-md-6">
                            <label for="country" class="form-label">Alternative Contact No.</label>
                            <input type="text" class="form-control" id="country" placeholder="Mobile number">
                        </div>

                        <div class="heading col-md-12 ml-3">Upload Documents</div>

                        <div class="col-md-6 mb-3">
                            <label class="form-label" for="inputGroupFile01">Age Proof <span class="badge badge-danger">* (Birth Certificate)</span></label>
                            <div class="input-group mb-1">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                                    <label class="custom-file-label" for="inputGroupFile01">Supported files pdf, jpg and png</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label" for="inputGroupFile01">Address Proof <span class="badge badge-danger">* (Aadhaar card/Proof of current address)</span></label>
                            <div class="input-group mb-1">
                                <div class="custom-file">
                                    <input type="file"  class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                                    <label class="custom-file-label" for="inputGroupFile01">Supported files pdf, jpg and png</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label" for="inputGroupFile01">Upload Image</label>
                            <div class="input-group mb-1">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                                    <label class="custom-file-label" for="inputGroupFile01">Supported files pdf, jpg and png</label>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12" style="display:flex;justify-content: flex-end;">
                            <button class="btn btn-outline-secondary mr-2 px-4">
                                Cancel
                            </button>
                            <button class="btn btn-primary px-5">
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