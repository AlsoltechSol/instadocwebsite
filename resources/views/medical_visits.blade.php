@extends('main')
@section('title',"Home")
@section('pagestyles')

@endsection
@section('content')
<Section id="medicalVisit">
    <div class="container mt-2">
        <div class="heading">Request For Medical Visit</div>
        <form method="POST" action="#">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-6 mb-1">
                            <label for="FullName" class="form-label">Full Name</label>
                            <input type="text" class="form-control" id="FullName" placeholder="Enter Full name">
                        </div>
                        <div class="col-md-6 mb-1">
                            <label for="Date" class="form-label">Date of Travel</label>
                            <input type="date" class="form-control" id="Date" placeholder="Date of Travel">
                        </div>
                        <div class="col-md-6 mb-1">
                            <label for="Dest" class="form-label">Destination Location</label>
                            <input type="text" class="form-control" id="Dest" placeholder="Enter your destination">
                        </div>
                        <div class="col-md-6 mb-1">
                            <label for="country" class="form-label">Country of Resident</label>
                            <input type="text" class="form-control" id="country" placeholder="ex: India">
                        </div>
                        <div class="col-md-6 mb-1">
                            <label for="exampleFormControlTextarea1" class="form-label">Destination Address</label>
                            <textarea class="form-control" placeholder="Address" id="exampleFormControlTextarea1" rows="3" style="resize: none;"></textarea>
                        </div>
                        <div class="col-md-6 mb-1">
                            <label for="exampleFormControlTextarea2" class="form-label">Reason For Travel</label>
                            <textarea class="form-control" placeholder="Add description" id="exampleFormControlTextarea2" rows="3" style="resize: none;"></textarea>
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