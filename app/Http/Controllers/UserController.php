<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Validator;
use DB;
class UserController extends Controller
{
    //
    public function index(){
        return view('login');
    }

    public function doLogin(Request $request){
        $username = $request->input('name');
        $password = $request->input('password');

        //validation
        $inputs = array(
            'user' =>$username,
            'pass' =>$password
        );
        $rules = array(
            'user' =>"required",
            'pass' =>"required"
        );
        $validator = Validator::make($inputs,$rules);
        if($validator->fails()){
            $status = "ErrorValidation";
            return redirect('login')->withErrors($validator)->withInput();
        }else{
            //return 'success';
            $user = User::where('name','=',$inputs['user'])
                ->where('password','=',$inputs['pass'])
                ->first();
            if($user){
                //Auth::login($user);
                return redirect ('dashboard');
            }
            else {
                return redirect('login');
            }
        }
    }
}
