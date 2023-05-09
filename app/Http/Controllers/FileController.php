<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\File; 

class FileController extends Controller
{
 //create video
    public function videoupload(Request $request)
    {

        $request->validate([
            'video_name' => 'required'
        ]);

        $video_tump ="";

        if ($request->file('thumbnail')) {
            $file = $request->file('thumbnail');
            $destinationPath = 'fileupload/';
            $video_thumbnail = date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $video_thumbnail);
            $video_tump = $video_thumbnail;
        }

        $video_file ="" ;
        if ($request->file('video_file')){
            $file = $request->file('video_file');
            $destinationPath = 'fileupload/';
            $video = date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $video);
            $video_file = $video;
        }

             $created = DB::table("video_table")
                ->insert(
                    array(
                        "video_name" =>  $request["video_name"],
                        "video_thumbnail" =>  'fileupload/'.$video_tump,
                        "link" => 'fileupload/'.$video_file,
                    )
                );

        return  redirect()->back()->with('message', 'Added successfully');
              
    }

    public function videolist(Request $request)
    {
        $video =  DB::table('video_table')->get();  
        return view('admin.video', compact('video'));
    }

    public function videoupdate(Request $request){

       $edit = DB::table('video_table')
        ->where('id',$request->id)->first();
      
       $video_tump =$edit->video_thumbnail;
        if ($request->file('thumbnail')) {
            $file = $request->file('thumbnail');
            $destinationPath = 'fileupload/';
            $video_thumbnail = date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $video_thumbnail);
            $video_tump = 'fileupload/'.$video_thumbnail;
        }
        $video_file =$edit->link;
        
        if ($request->file('video_file')){
            $file = $request->file('video_file');
            $destinationPath = 'fileupload/';
            $video = date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $video);
            $video_file = 'fileupload/'.$video;
        }

        $updated = DB::table("video_table")
        ->where('id', $request->id)
        ->update(
            array(
                "video_name" =>  $request["video_name"],
                "video_thumbnail" =>  $video_tump,
                "link" =>$video_file,
            )
        );

        return  redirect()->back()->with('message', 'Added successfully');
        
    }

    public function videodelete($id){

       $file = DB::table('video_table')
        ->where('id',$id)->first();
        
        $video_path =$this->file_url().$file->video_thumbnail;
        $image_path = $this->file_url().$file->link;
  
        if (File::exists($image_path)){
            unlink($image_path);
        }
        if (File::exists($video_path)) {
            unlink($video_path);
        }
        DB::table('video_table')
        ->where('id',$id)->delete();
        return  redirect()->back()->with('message', 'Deleted successfully');
    }


    //book
    public function booklist(){
        $book =  DB::table('book_table')->get();  
        return view('admin.book', compact('book'));
    }

    public function bookupload(Request $request){
        $request->validate([
            'book_name' => 'required'
        ]);
    
        if ($request->file('thumbnail')) {
            $file = $request->file('thumbnail');
            $destinationPath = 'fileupload/';
            $book_thumbnail = date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $book_thumbnail);
            $book_tump = 'fileupload/'.$book_thumbnail;
        }

        $book_file ="";         
        if ($request->file('book_file')){
            $file = $request->file('book_file');
            $destinationPath = 'fileupload/';
            $book = date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $book);
            $book_file = 'fileupload/'.$book;
        }
        $updated = DB::table("book_table")
          ->insert(
            array(
                "book_name" =>  $request["book_name"],
                "book_thumbnail" =>  $book_tump,
                "link" =>$book_file,
            )
        );
   
        return  redirect()->back()->with('message', 'Added successfully');
    }

    public function bookupdate(Request $request){

        $edit = DB::table('book_table')
         ->where('id',$request->id)->first();
         $book_tump =$edit->book_thumbnail;

         if ($request->file('thumbnail')) {
             $file = $request->file('thumbnail');
             $destinationPath = 'fileupload/';
             $book_thumbnail = date('YmdHis') . "." . $file->getClientOriginalExtension();
             $file->move($destinationPath, $book_thumbnail);
             $book_tump = 'fileupload/'.$book_thumbnail;
         }

         $book_file =$edit->link;
         
         if ($request->file('book_file')){
             $file = $request->file('book_file');
             $destinationPath = 'fileupload/';
             $book = date('YmdHis') . "." . $file->getClientOriginalExtension();
             $file->move($destinationPath, $book);
             $book_file = 'fileupload/'.$book;
         }
 
         $updated = DB::table("book_table")
         ->where('id', $request->id)
         ->update(
             array(
                 "book_name" =>  $request["book_name"],
                 "book_thumbnail" =>  $book_tump,
                 "link" =>$book_file,
             )
         );

         return  redirect()->back()->with('message', 'Added successfully');         
     
       }
  
       public function bookdelete($id){

        $file = DB::table('book_table')
         ->where('id',$id)->first();
         
         $book_path =$this->file_url().$file->book_thumbnail;
         $image_path = $this->file_url().$file->link;
   
         if (File::exists($image_path)){
             unlink($image_path);
         }
 
         if (File::exists($book_path)) {
             unlink($book_path);
         }
 
         DB::table('book_table')
         ->where('id',$id)->delete();
         return  redirect()->back()->with('message', 'deleted successfully');
    }
   
   
   
    private function file_url(){
        return 'public_html/inm/';
    }
   
  //banner
      public function addbanner(Request $request){
       $request->validate([
           'banner_name' => 'required',
           'banner_image' => 'required'
       ]);

       $banner_image ="";
       if ($request->file('banner_image')){
           $file = $request->file('banner_image');
           $destinationPath = 'fileupload/';
           $book = date('YmdHis') . "." . $file->getClientOriginalExtension();
           $file->move($destinationPath, $book);
           $banner_image = 'fileupload/'.$book;
       }

       $added = DB::table("banner_table")->insert(
           array(
              "banner_name" =>  $request["banner_name"],
               "banner_image" =>$banner_image,
           )
       );

       return redirect()->back()->with('message', 'Added successfully');         
      

      }


      public function bannerupdate(Request $request){

        $request->validate([
           'banner_name' => 'required'
        ]);

        $edit = DB::table('banner_table')
        ->where('id',$request->id)->first();

        $banner_image =$edit->banner_image;

        if($request->file('banner_image')) {
          
           $file = $request->file('banner_image');
           $destinationPath = 'fileupload/';
           $book_thumbnail = date('YmdHis') . "." . $file->getClientOriginalExtension();
           $file->move($destinationPath, $book_thumbnail);
           $banner_image = 'fileupload/'.$book_thumbnail;
       
       }
     
        $updated = DB::table("banner_table")
        ->where('id', $request->id)
        ->update(
            array(
               "banner_name" =>  $request["banner_name"],
                "banner_image" =>$banner_image,
            )
        );

        return redirect()->back()->with('message', 'Updated successfully');         
    
      }


   
   public function bannerdelete($id){


       $file = DB::table('banner_table')
        ->where('id',$id)->first();
        
        $banner_path =$this->file_url().$file->banner_image;
   
        if (File::exists($banner_path)) {
            unlink($banner_path);
        }
        DB::table('banner_table')
        ->where('id',$id)->delete();
        return  redirect()->back()->with('message', 'Deleted successfully');
    }


    public function bannerlist(){
        
        $banner =  DB::table('banner_table')->get();  
        return view('admin.banner', compact('banner'));
    }

  


 //mobilebanner
 public function addmobilebanner(Request $request){
    
    $request->validate([
        'banner_name' => 'required',
        'banner_image' => 'required'
    ]);

    $banner_image ="";

    if ($request->file('banner_image')){
        $file = $request->file('banner_image');
        $destinationPath = 'fileupload/';
        $book = date('YmdHis') . "." . $file->getClientOriginalExtension();
        $file->move($destinationPath, $book);
        $banner_image = 'fileupload/'.$book;
    }

    $added = DB::table("mobile_banner_table")->insert(
        array(
           "banner_name" =>  $request["banner_name"],
            "banner_image" =>$banner_image,
        )
    );

    return redirect()->back()->with('message', 'Added successfully');         
   

   }


   public function mobilebannerupdate(Request $request){

     $request->validate([
        'banner_name' => 'required'
     ]);

     $edit = DB::table('mobile_banner_table')
     ->where('id',$request->id)->first();

     $banner_image =$edit->banner_image;

     if($request->file('banner_image')) {
       
        $file = $request->file('banner_image');
        $destinationPath = 'fileupload/';
        $book_thumbnail = date('YmdHis') . "." . $file->getClientOriginalExtension();
        $file->move($destinationPath, $book_thumbnail);
        $banner_image = 'fileupload/'.$book_thumbnail;
    
    }
  
     $updated = DB::table("mobile_banner_table")
     ->where('id', $request->id)
     ->update(
         array(
            "banner_name" =>  $request["banner_name"],
             "banner_image" =>$banner_image,
         )
     );

     return redirect()->back()->with('message', 'Updated successfully');         
 
   }



public function mobilebannerdelete($id){


    $file = DB::table('mobile_banner_table')
     ->where('id',$id)->first();
     
     $banner_path =$this->file_url().$file->banner_image;

     if (File::exists($banner_path)) {
         unlink($banner_path);
     }
     DB::table('mobile_banner_table')
     ->where('id',$id)->delete();
     return  redirect()->back()->with('message', 'Deleted successfully');
 }


 public function mobilebannerlist(){
     
     $banner =  DB::table('mobile_banner_table')->get();  
     return view('admin.mobilebanner', compact('banner'));
 }



}