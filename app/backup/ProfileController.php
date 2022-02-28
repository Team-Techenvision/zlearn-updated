<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\UserDetails;
use App\Education_Detail;
use App\Academics_detail;
use App\Academic_project;
use App\Certification;
use App\Interships;
use App\Technical_skill;
use Session;
use Illuminate\Support\Facades\Auth;
use DB;
use Hash;

class ProfileController extends Controller
{
    //
    public function edit_password()
    {
        $data['page_title'] = 'Edit Password';
    	return view('Students/Webviews/edit_password',$data);

    }

    public function update_password(Request $req){
        // dd($req);
        $u_id = Auth::User()->id;
        $user = User::find($u_id);       
        if($req->password == $req->c_password){
            $user->password = Hash::make($req->password);
        }
        $user->save();
        toastr()->success('Password Updated!');
        return redirect()->back();
    }
}
