<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use GuzzleHttp\Client;

class ClientController extends Controller
{

    public function userpage()
    {

        $banner =  DB::table('banner_table')->get();  
        $book_list = DB::table('book_table')->get();
        return view('client.index',compact('book_list','banner'));
    }

    public function muslimhome()
    {

        $book_list = DB::table("book_table")->get();

        return view('client.muslimhome', compact('book_list'));
    }

    public function nonmuslim()
    {

        $book_list = DB::table("book_table")->get();
        return view('client.nonmuslim', compact('book_list'));
    }

    public function aboutus()
    {
        return view('client.aboutus');
    }

    public function contact()
    {
        return view('client.contact');
    }

    public function book()
    {
        $book_list = DB::table("book_table")
            ->get();
        return view('client.book', compact('book_list'));
    }

    public function video()
    {
        $video_list = DB::table("video_table")
            ->get();

            $arr = [];
            foreach($video_list as $data){
                $item = [];
                $item["video_name"]=$data->video_name;
                $item["video_thumbnail"]=$data->video_thumbnail;
                $item["link"]=$data->link;
                $item["id"]=$data->id;
                $item["count"]=count(DB::table("visitor")->where('bookid',$data->id)->get());
                $arr[] = $item;
            }
         $video_list = $arr;
        return view('client.video', compact('video_list'));
    }

    //create user
    public function addMuslim(Request $request)
    {
        $rules = array(
            "name" =>  "required",
            "gender" =>  "required",
            "nationality" =>  "required",
            "religion" =>  "required",
            "phone_number" =>  "required",
            "language" =>  "required",
            "phone_code" =>  "required",
        );

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {

            return redirect()->back()->with('warning', $validator->errors()->first());
        } else {


            if (isset($request["user_id"])) {
                $user_id = $request["user_id"];
            } else {
                $user_id = 0;
            }


            if (isset($request["status"])) {
                $status = $request["status"];
            } else {
                $status = 0;
            }

            if ($request["email"] == null) {
                $request["email"] = "_____";
            }

            $phone = $request["phone_code"] . $request["phone_number"];
$found = DB::table("user_table")->where( "phone", $phone)->get();

if(sizeof($found)){
    return redirect()->back()->with('warning', "User Mobile Number already Exists");
}

            $created = DB::table("user_table")
                ->insertGetId(
                    array(
                        "name" => $request["name"],
                        "gender" =>  $request["gender"],
                        "nationlity" =>  $request["nationality"],
                        "religion" =>  $request["religion"],
                        "email" =>  $request["email"],
                        "phone" =>   $phone,
                        "language" =>  $request["language"],
                        "user_id" =>  $user_id,
                        "status" =>  $status
                    )
                );
            $this->sendMassage($created);


            return redirect()->back()->with('popupmessage', 'Added successfully');
        }
    }

    //create islam user
    public function follow_up(Request $request)
    {
        $rules = array(
            "user_id" =>  "required",
            "last_book_id" =>  "required",
            "purchase_date" =>  "required"
        );

        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return redirect()->back()->with('warning', $validator->errors()->first());
        } else {
            $created = DB::table("follow_up")->insert(
                array(
                    "user_id" =>  $request["user_id"],
                    "last_book_id" =>  $request["last_book_id"],
                    "purchase_date" =>  $request["purchase_date"]
                )
            );

            return redirect()->back()->with('message', 'Added successfully');
        }
    }




    private function sendMassage($user_id)
    {

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
                                    'link' => $book,
                                    'filename'=>'INM Book'
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

    public function posts(Request $request)
    {
        $book_list = DB::table("book_table")->get();
        return view('client.post', compact('book_list'));
    }


    public function inspire(Request $request){
        
       $inspire =
            [
               [ "img"=> "user_assets/images/quotesicon/quotes-img-29.png", "quote"=> "Join not in worship others with God, the creator, the Sustainer of the world. Nor bow your head before anyone except God."],

       [ "img"=> "user_assets/images/quotesicon/quotes-img-2.png", "quote"=> "Study the exemplary life stories of God’s chosen Prophets and Messengers. Believe in all the prophets and messengers and follow them in your daily lives."],

       [ "img"=> "user_assets/images/quotesicon/quotes-img-3.png", "quote"=> "When you experience a joyful occasion, express your gratitude to God. And if you suffer misfortune, endure it patiently, and ask almighty for help."],

       [ "img"=> "user_assets/images/quotesicon/quotes-img-4.png", "quote"=> "Remember that there is a right of the poor and the needy in your wealth, so make sure to give it to them."],

       [ "img"=> "user_assets/images/quotesicon/quotes-img-5.png", "quote"=> "Invoke God alone in your hour of need. Do not invoke anyone beside Him, since He alone can answer your prayers."],

       [ "img"=> "user_assets/images/quotesicon/quotes-img-6.png", "quote"=> "Always maintain cleanliness in your clothes and body. Keep your belongings, your house, and your courtyard clean and tidy."],

       [ "img"=> "user_assets/images/quotesicon/quotes-img-7.png", "quote"=> "Remember that the tongue can inflict deeper wounds than the sword. Therefore, do not allow your tongue to hurt anyone."],

       [ "img"=> "user_assets/images/quotesicon/quotes-img-8.png", "quote"=> "Walk not on the earth with pride and arrogance nor walk like a sick person. Be moderate in gait."],

       [ "img"=> "user_assets/images/quotesicon/quotes-img-9.png", "quote"=> "Do not give short measures and weights, nor give inferior merchandise to your customers in a deceitful manner. Be honest in your dealing."],

       [ "img"=> "user_assets/images/quotesicon/quotes-img-10.png", "quote"=> "Keep yourself healthy. Demonstrate no signs of weakness. Sleep, rise, eat, drink, and do all things on time."],

       [ "img"=> "user_assets/images/quotesicon/quotes-img-11.png", "quote"=> "When you commit a mistake or sin through ignorance, turn to your God- the merciful- and repent sincerely to Him."],

       [ "img"=> "user_assets/images/quotesicon/quotes-img-12.png", "quote"=> "Acquiring knowledge is a virtuous occupation. Try to get more and more education and spend most of your time in reading."],

       [ "img"=> "user_assets/images/quotesicon/quotes-img-13.png", "quote"=> "Be dutiful to your parents, take good care of them, fulfill their commands, and do not utter a word of discontent to them."],

       [ "img"=> "user_assets/images/quotesicon/quotes-img-14.png", "quote"=> "Give a good upbringing to your children on moral values, take good care of their education, and treat all your children equally."],

       [ "img"=> "user_assets/images/quotesicon/quotes-img-15.png", "quote"=> "God has bestowed the honor on woman by granting her the status of a mother, a sister, a wife, and a daughter. So, recognize and accept her honorable status."],

       [ "img"=> "user_assets/images/quotesicon/quotes-img-16.png", "quote"=> "It is the good inmates that make a good home and bad inmates that make a bad home. Be your own judge about your home."],

       [ "img"=> "user_assets/images/quotesicon/quotes-img-17.png", "quote"=> "Good individuals make a good society. So, live as a good member of the society, and serve your society all the time."],

       [ "img"=> "user_assets/images/quotesicon/quotes-img-18.png", "quote"=> "Love the county of your residence, wish it well, and play a positive part in its economic, political, and social development."],

       [ "img"=> "user_assets/images/quotesicon/quotes-img-19.png", "quote"=> "Be content with what you have been given by God and cultivate contentment in your life. Live like a wayfarer in this world."],

       [ "img"=> "user_assets/images/quotesicon/quotes-img-20.png", "quote"=> "Use of alcohol and narcotics would not only harm you personally but also bring your entire family to the door of destruction. So, keep yourself away from intoxication."],

       [ "img"=> "user_assets/images/quotesicon/quotes-img-21.png", "quote"=> "Keep your heart pure and clean, since it will also make your body and mind pure and clean. If your heart is unclean, your body too will be spiritually unclean."],

       [ "img"=> "user_assets/images/quotesicon/quotes-img-22.png", "quote"=> "Plant trees and look after them, and use paper frugally and avoid wastage, since trees are cut down for manufacturing paper."],

       [ "img"=> "user_assets/images/quotesicon/quotes-img-23.png", "quote"=> "Water is perhaps the greatest of all God’s bounties on earth. So, conserve water, and do not harm the environment by polluting water."],

       [ "img"=> "user_assets/images/quotesicon/quotes-img-24.png", "quote"=> "Take good care of the animals and treat them well as there is a reward from almighty God for taking good care of them."],

       [ "img"=> "user_assets/images/quotesicon/quotes-img-25.png", "quote"=> "Make friends, be friends, and prize friendship as a boon from God, and be sincere to your friends and have trust in them."],

       [ "img"=> "user_assets/images/quotesicon/quotes-img-26.png", "quote"=> "Ponder over all the objects created by God in the universe and draw lessons from them. Reflecting on God’s creation will bring you close to God."],

       [ "img"=> "user_assets/images/quotesicon/quotes-img-27.png", "quote"=> "The most valuable asset of life is time. Recognize its importance and value each moment of life and put it to good use."],

       [ "img"=> "user_assets/images/quotesicon/quotes-img-28.png", "quote"=> "Remember that the highest point of wisdom is to know your Creator and lead your life according to His will. And a wise person is he who, living in this world, prepares himself for the Hereafter."]
            ];

      
        return view('client.inspire', compact('inspire'));
    }
}
