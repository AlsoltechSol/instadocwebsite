@extends('main')
@section('title', 'Home')
@section('pagestyles')

@endsection
@section('content')
<Section id="medicalVisit">
    <div class="container mt-2">
        <div class="heading">Request For Appointment</div>
        <form method="POST" action="{{ route('appointment.submit') }}" >
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
                            <div class="col-md-6 mb-1">
                                <label for="name" class="form-label">Full Name</label>
                                <input name="name" type="text" class="form-control" id="name" placeholder="Enter full name" required>
                            </div>
                            <div class="col-md-6 mb-1">
                                <label for="email" class="form-label">Email</label>
                                <input name="email" type="email" class="form-control" id="email" placeholder="Email" required>
                            </div>
                            <div class="col-md-6 mb-1">
                                <label for="mobile" class="form-label">Mobile</label>
                                <input name="mobile" type="number" class="form-control" id="mobile" placeholder="Mobile Number" required>
                            </div>
                            <div class="col-md-6 mb-1">
                                <label for="Date" class="form-label">Date</label>
                                <input name="appointment_date" type="date" class="form-control" id="Date" placeholder="Date" required>
                            </div>
                            <div class="col-md-6 mb-1">
                                <label for="Dest" class="form-label">Departments</label>
                                <input name="department" type="text" class="form-control" id="Dest" placeholder="Departments" required>
                            </div>
                            <div class="col-md-6 mb-1">
                                <label for="country" class="form-label">Doctors</label>
                                <select class="form-control" name="doctor_id" id="">
                                    @foreach ($doctors as $item)
                                        <option value="{{$item->id}}">{{$item->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-12 mb-1">
                                <label for="textArea" class="form-label">Message</label>
                                <textarea class="form-control" id="textArea" style="resize: none;" rows="3" placeholder="Enter your message here"></textarea>
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