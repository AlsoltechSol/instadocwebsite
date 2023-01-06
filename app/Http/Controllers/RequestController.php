<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Doctor;
use App\Models\PatientRequest;
use Illuminate\Http\Request;

class RequestController extends Controller
{
    public function medicalVisits(Request $request){
        // $request->validate([
        //     'name' => 'required',
        //     'passprt_no' => 'required',
        //     'attender_name' => 'required',
        //     'alt_passprt_no' => 'required',
           
        // ]);

        $data = $request->all();

        $data['request_for'] = 'medical-visits';

        $data['patient_id'] = 1;

        
        if ($request->hasFile('passport_image')) {
            $image = $request->file('passport_image');
            $filename = now()->timestamp . '.' . $image->getClientOriginalExtension();
        
            $image->move(public_path('patients/medical-visits/passport/'), $filename);
            $data['passport_image'] = $filename;
            
            // the rest of your code
         }

        PatientRequest::create($data);

        return back()->with('success', 'Form Submited Successfully!');
    }

    public function visa(Request $request){
        // $request->validate([
        //     'name' => 'required',
        //     'passprt_no' => 'required',
        //     'attender_name' => 'required',
        //     'alt_passprt_no' => 'required',
           
        // ]);

        $data = $request->all();

        $data['request_for'] = 'visa';

        $data['patient_id'] = 1;

        
        if ($request->hasFile('applicant_image')) {
            $image = $request->file('applicant_image');
            $filename = now()->timestamp . '.' . $image->getClientOriginalExtension();
        
            $image->move(public_path('patients/visa/applicant_image'), $filename);
            $data['applicant_image'] = $filename;
            
            // the rest of your code
         }

          
        if ($request->hasFile('age_proof')) {
            $image = $request->file('age_proof');
            $filename = now()->timestamp . '.' . $image->getClientOriginalExtension();
        
            $image->move(public_path('patients/visa/age_proof'), $filename);
            $data['age_proof'] = $filename;
            
            // the rest of your code
         }

         if ($request->hasFile('address_proof')) {
            $image = $request->file('address_proof');
            $filename = now()->timestamp . '.' . $image->getClientOriginalExtension();
        
            $image->move(public_path('patients/visa/address_proof'), $filename);
            $data['address_proof'] = $filename;
            
            // the rest of your code
         }

        PatientRequest::create($data);

        return back()->with('success', 'Form Submited Successfully!');
    }

    public function labTest(Request $request){
        // $request->validate([
        //     'name' => 'required',
        //     'passprt_no' => 'required',
        //     'attender_name' => 'required',
        //     'alt_passprt_no' => 'required',
           
        // ]);

        $data = $request->all();

        $data['request_for'] = 'lab-test';

        $data['patient_id'] = 1;

        
        if ($request->hasFile('prescription')) {
            $image = $request->file('prescription');
            $filename = now()->timestamp . '.' . $image->getClientOriginalExtension();
        
            $image->move(public_path('patients/lab-test/prescription'), $filename);
            $data['prescription'] = $filename;
            
            // the rest of your code
         }

          
        PatientRequest::create($data);

        return back()->with('success', 'Form Submited Successfully!');
    }

    public function appointmentForm(){
        $doctors = Doctor::all();
        return view('DocConsultForm', compact('doctors'));
    }

    public function appointment(Request $request){
    
        $request->validate([
            'name' => 'required',
            'mobile' => 'required'
        ]);

        $data = $request->all();
        $data['appointment_status'] = 'Active';
        $data['payment_status'] = 'Pending';

        
        $data['patient_id'] = 1;

        Appointment::create($data);

        return back()->with('success', 'Form Submited Successfully!');
    }
}
