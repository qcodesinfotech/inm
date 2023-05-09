<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use  Illuminate\Support\Carbon;
use Carbon\CarbonPeriod;
use GuzzleHttp\Client;

class ApiController extends Controller
{
 //create user
  public function checkbooksend(Request $request){

   $r = DB::table("book_table")->get()->toArray();
   $book_id = array_map(function($i){return $i->id;},$r);

$user_table = DB::table('user_table')->get();
foreach($user_table as $U){   
    $userfind = DB::table('follow_up')->where('user_id',$U->id)->get();
    if(!sizeof($userfind)){
     $this->sendMassage($U->id);
    };
}
// $follow_up = DB::table('follow_up')->get()->groupBy('user_id');

$follow_up = DB::table('follow_up')
->orderBy('id', 'desc')
->get()
    ->groupBy('user_id');

foreach($follow_up as $item => $data){
  $fdate = $data[0]->purchase_date;
  $ldate = date("Y-m-d");
$to = Carbon::parse($fdate);
$from = Carbon::parse($ldate);
$days = $to->diffInDays($from);
if($days >= 15){
    $this->sendMassage($data[0]->user_id);
};
}

dd($follow_up = DB::table('follow_up')
->orderBy('id', 'desc')
->get());
}



public function hitcount(Request $request,$id)
{

    $device = $request->header('User-Agent');
    // $device = $request->header('Accept-Language');
 
    $ip = $request->ip();

    $date = new \DateTime;
    $check_if_exists = DB::table('visitor')
    ->where('ip', $ip)
    ->where('bookid', $id)
    ->where('device',$device)
    ->first();

    $value = Carbon::now();
    if(!$check_if_exists)
    {
        DB::table('visitor')->insert(array('ip' => $ip,'device'=>$device,'hits' => '1', 'visit_date' => $date,'bookid'=> $id));
    }else{
        DB::table('visitor')->where('ip', $ip)->where('bookid', $id)->increment('hits');
    }
    $value = Carbon::now();
    if ($check_if_exists && date_format($value, 'd') != date('d')) {
        DB::table('visitor')->insert(array('ip' => $ip,'device'=>$device,'hits' => '1', 'visit_date' => $date,'bookid'=> $id));
    }

    return response()->json([
        'status' => "working"
    ]);
}


public function create_islamuser(Request $request)
{
    $rules = array(
        "username" =>  "required",
        "password" =>  "required",
        "name" =>  "required",
    );

    $validator = Validator::make($request->all(), $rules);

     if($validator->fails()) {
        return response(['status'=>"false",'message'=>'Validation Failed']);     
        }else{
            $created = DB::table("isal_user")->where("user_name" ,  $request["username"])->first();
            if(isset($created)){
                return response(['status'=>"false",'message'=>'User Already exists']);
            }

        //  return $request;
       
        $created = DB::table("isal_user")->insertGetId(
            array(
                "user_name" =>  $request["username"],
                "password" => Hash::make($request["password"]),
                "name" => $request["name"]
            )
        );

        return response(['status'=>"true","id"=>$created,'message'=>'Created successfully']);
    
     }
}


public function login(Request $request)
{
   
    $rules = array(
        "user_name" =>  "required",
        "password" =>  "required"
    );

    $validator = Validator::make($request->all(), $rules);

    if ($validator->fails()) {

        return response(['status'=>"false",'message'=>'Validation Failed']);
          
    } else {
        $get = DB::table("isal_user")
            ->where("user_name", $request["user_name"])
            ->first();

            if(isset($get)){
             $hashedPassword = $get->password;
           }else{
                $hashedPassword = "Invalid_user_QC";

            }
        if (Hash::check($request["password"], $hashedPassword)) {
            return response(['status'=>"true","data"=>$get,'message'=>'login successfully']);
        } else {
            return response(['status'=>"false","data"=>[],'message'=>'Invalid Credential']);          
        }
    }
}

public function nonMuslimData($id){

    $list = DB::table("user_table")
    ->where('user_id',$id)->get();

    return response(['status'=>'success','data'=>$list]);
}

private function sendMassage($user_id){

    $id = DB::table('book_table')->orderBy('id', 'asc')->first();
    $created = DB::table("follow_up")->insert(
        array(
            "user_id" => $user_id,
            "last_book_id" => $id->id,
            "purchase_date" =>  date("Y-m-d")
        )
    );

    $book = asset($id->link);

    $user = DB::table('user_table')
        ->where('id', $user_id)->first();
    $phone = '919360312489';
    // $phone = $user->phone;

    $client = new Client();

    $headers = [
        'Authorization' => 'Bearer EAAPLIhHD7zUBAAuXfuLgUA2Yx6F4Oc14Y0iEJf1Q3eSQkXjZCn41jZAqx2Lw2N0jVGbIeZBAdN5x9jFtAMpeVOcXQhtJnCBvG6MXCrofCf5lfX7rZCdJEZAW0SnjZAnk72uzMI6VnlB8QirhPOLBC5BcOOHVOtsXWQwmGc197Ww9EO3xKYXCLRFs5OXlYy0Ujcn0trNbQTvgZDZD',
        'Content-Type' => 'application/json'
    ];

    $body = [
        'messaging_product' => 'whatsapp',
        'to' => $phone,
        'type' => 'template',
        'template' => [
            'name' => 'send_docs',
            'language' => [
                'code' => 'en_US'
            ],
            'components' => [
                [
                    'type' => 'header',
                    'parameters' => [
                        [
                            'type' => 'document',
                            'document' => [
                                'link' => $book
                            ]
                        ]
                    ]
                ],
                [
                    'type' => 'body',
                    'parameters' => [
                        [
                            'type' => 'text',
                            'text' => 'Visit: http://qcodesinfotech.com/inm'
                        ]
                    ]
                ]
            ]
        ]
    ];

    $options = [
        'headers' => $headers,
        'json' => $body
    ];

    $res = $client->request('POST', 'https://graph.facebook.com/v16.0/101463886243579/messages', $options);

    echo $res->getBody();
    // echo $book;
}



}


