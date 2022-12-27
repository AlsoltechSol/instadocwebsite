@extends('main')
@section('title',"Home")
@section('pagestyles')
@endsection
@section('content')
<Section>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="heading">Request For Medical Visit</div>
            </div>
            <form method="POST" action="#">
                <div class="col-md-6 mb-3">
                    <label for="FullName" class="form-label">Full Name</label>
                    <input type="text" class="form-control" id="FullName" placeholder="Enter Full name">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="Date" class="form-label">Date of Travel</label>
                    <input type="date" class="form-control" id="Date" placeholder="Date of Travel">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="Dest" class="form-label">Destination Location</label>
                    <input type="email" class="form-control" id="Dest" placeholder="Destination Location">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="country" class="form-label">Country of Resident</label>
                    <select class="form-select" aria-label="Default select example" id="country">
                        <option selected>Open this select menu</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
                <div class="col-md-12 mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Destination Address</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
                <div class="col-md-12 mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Reason For Travel</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
                <div class="col-md-12">
                    <button class="btn btn-outline-secondary">
                        Cancel
                    </button>
                    <button class="btn btn-primary">
                        Save
                    </button>
                </div>
            </form>
        </div>
    </div>
</Section>
@endsection
