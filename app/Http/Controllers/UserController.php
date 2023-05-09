<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class UserController extends Controller
{
   
    function userlogin(Request $request)
    {
 
        return view('admin.login');
    
    }


    function login(Request $request){

        if($request["username"]=="qcodesinfotech" && $request["password"]=="qcodes123"){
            $request->session()->put('LoggedUser',$request["username"]);
            return redirect('admin/userlist');
        }else{
            return redirect('admin')->with('warning',"invalid username or password");
        }

    }

}