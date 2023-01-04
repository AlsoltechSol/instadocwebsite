<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function patientLogin(Request $request){
        // dd($request);
        return 'hi';
        
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

        // if ($sms == 1) {
        //     return redirect('/verify-otp');
        // }

           
    }

    public function doctorLogin(Request $request){
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
            $user->role = 'doctor';
            $user->name = $request->name;
            $user->otp = $otp;
            $user->save();
            $request->session()->put('otp', $otp);
            $sms = 1;
        }

        // if ($sms == 1) {
        //     return redirect('/verify-otp');
        // }

           
    }
     
     
 
     public function checkOtp(Request $request){
 
        $request->validate([
            // 'mobile' => 'required',
            'otp' => 'required'
        ]);

        $otp = $request->otp;

        $mobile = $request->mobile;

        $user = User::where('mobile', $mobile)->first();

        // return $user->otp;

        if ($otp == $user->otp && $user) {


            Auth::login($user);
            //return Auth::user();
            // dd($validated);
            return redirect('/booking')->withErrors(['msg' => 'otp invalid']);
        } else {
            $request->session()->put('error', 'OTP invalid please try again');
            $request->session()->get('error');
            return back();
        }
     }
}
