<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Symfony\Contracts\Service\Attribute\Required;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function registration()
    {
        return view('auth.registration');
    }
    public function login()
    {
        return view('auth.login');
    }

    public function login_post(Request $request){
        // dd($request->all());
        if(Auth::attempt(['email'=> $request->email,'password'=> $request->password],true)){
            if(Auth::User()->is_role=='2'){
                // echo "Super Admin";
                // die();
                return redirect()->intended('superadmin/dashboard');
            }else if(Auth::User()->is_role=='1'){
                // echo "Admin";
                // die();
                return redirect()->intended('admin/dashboard');
            }else if(Auth::User()->is_role=='0'){
                // echo "User";
                // die();
                return redirect()->intended('user/dashboard');
            }else{
                return redirect('login')->with('error','No Available s Email.. Please Check');
            }
            
        }else{
            return redirect()->back()->with('error','please ennter correct credentials');
        }
    }
    public function forgot(){
        return view('auth.forgot');
    }
    public function registration_post(Request $request ){
        //dd($request->all());
        $user = request()->validate([
            'name'=>'required',
            'email'=>'required | unique:users',
            'password'=>'required|min:6',
            'confirm_password'=>'required_with:password|same:password|min:6',
            'is_role' =>'required'
        ]);
        $user = new User();
        $user->name           = $request->name;
        $user->email          = $request->email;
        $user->password       = Hash::make($request->password);
        $user->is_role        = $request->is_role;
        $user->remember_token = Str::random(50);
        $user->save();
        return redirect('login')->with('success','Request Successfully.');
    }


}
