<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Queue\Jobs\RedisJob;
use Illuminate\Support\Facades\DB;
class AdminController extends Controller
{

    function register_user(Request $request){

        $user_table = DB::table('user_table')->get();

        return view("admin.registeruser",compact('user_table'));
    }

    function userlist()
    {
        $user_table = DB::table('user_table')->get();
       return view('admin.userlist',compact('user_table'));
    }


    function userlogin(Request $request)
    {

        if (session()->has('LoggedUser')) {
            session()->pull('LoggedUser');
            return redirect('admin/logout');
        }
        return redirect('admin/logout');
    }
    function delete_user($id){
        
        $user_table = DB::table('user_table')
        ->where('id',$id)
        ->delete();
       
       return redirect()->back()->with("warning","user deleted successfully");
    }


    public function sendmail(){

       $user =   DB::table('user_table')->get();
       $book = DB::table('book_table')->get();
       $video = DB::table('video_table')->get();

       dd($user,$book,$video);
       $follow_up = DB::table('follow_up')
       ->insert(array());

    }

}