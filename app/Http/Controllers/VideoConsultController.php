<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use Illuminate\Http\Request;

class VideoConsultController extends Controller
{
    public function getDoctors(){
        $doctors = Doctor::orderBy('created_at', 'desc')->take(6)->get();
       // return $doctors;
        
        return view('VideoConsult', compact('doctors'));
    }
}
