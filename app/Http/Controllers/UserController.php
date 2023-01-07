<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function patientLogin(Request $request){
        // dd($request);
        
        $mobile = $request->mobile;
        $otp = 1000;
        // if($mobile='7980222011'){
        //     $otp=1010;
        // }
        $user = User::where('mobile', $request->mobile)->first();
        $request->session()->put('mobile', $mobile);
        $sms = 0;

        if ($user) {
            $user->otp = $otp;
            $user->save();
            $request->session()->put('otp', $user->otp);
            $sms = 1;
        } else {
            $user = new User();
            $user->mobile = $request->mobile;
            $user->role = 'patient';
            $user->name = $request->name;
            $user->otp = $otp;

            return $user;
            $user->save();
            $request->session()->put('otp', $otp);
            $sms = 1;
        }

        if ($sms == 1) {
            return redirect('/otp/en');
       }

           
    }

    public function doctorLogin(Request $request){
        // dd($request);
       
        $data = $request->all();
        
        $mobile = $request->mobile;
        $otp = 1000;
        // if($mobile='7980222011'){
        //     $otp=1010;
        // }
        $user = User::where('mobile', $request->mobile)->first();
        $request->session()->put('mobile', $mobile);
        $sms = 0;

        if ($user) {
            $user->otp = $otp;
            $user->save();
            $request->session()->put('otp', $user->otp);
            $sms = 1;

           
        } else {
            $user = new User();
            $user->mobile = $request->mobile;
            $user->role = 'doctor';
            $user->name = $request->name;
            $user->otp = $otp;
            $user->save();
            $request->session()->put('otp', $otp);
            $sms = 1;
          
        }

        if ($sms == 1) {
             return redirect('/otp/en');
        }

           
    }
     
     
     public function checkOtp(Request $request){
 
        $otp = $request->otp;

        $mobile = $request->session()->get('mobile');

        $user = User::where('mobile', $mobile)->first();

        // return $user;

        // return $user->otp;

        if ($otp == $user->otp && $user) {
            Auth::login($user);
            if ($user->role == "doctor"){
                return redirect('/doctor-dashboard/en');
            }else{
                return redirect('/patient-dashboard/en');
            }

         
            //return Auth::user();
            // dd($validated);
            
        } else {
            $request->session()->put('error', 'OTP invalid please try again');
            $request->session()->get('error');
            return back();
        }
     }

     public function logout(){
        Auth::logout();
        return redirect()->route('login', 'en');
     }
}
