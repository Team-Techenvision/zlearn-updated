<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;
use Auth;
use redirect;
use Session;
use DB;

class MainController extends Controller
{
    public function index(){
        return view('Website/index');
    }

    public function login(){
        return view('Website/login');
    }
    public function register(){
        return view('Website/register');
    }

    public function register_submit(Request $req){
                // dd($req);
                $data = new User;
                $data->name=$req->f_name;
                $data->l_name=$req->l_name;
                $data->email=$req->email;
                $data->phone=$req->phone;
                $data->password= Hash::make($req->password);
                $data->user_type=$req->user_type;
                $is_saved = $data->save();
                // toastr()->success('login successfully');
                return back();
    }

    public function home(){
        return view('Website/index');
    }

    public function login_submit(Request $req){
        // dd($req);

        $this->validate($req, [
            'phone' => 'required',
            'password' => 'required'        
        ]);

        $data['phone'] = $req->get('phone');
        $data['password'] = $req->get('password');
        // dd($data['password']);
        if(Auth::attempt($data)){
            // dd($req);
                return redirect('/profile');
        }else{
            return back();
        }

    }

    public function profile(){
        $user_id = Auth::user()->id; 
        $data['user']= User::where('id',$user_id)->first();
        // dd($data);
        return view('Website/user_profile',$data);
    }
    
}
