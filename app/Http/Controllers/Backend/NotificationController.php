<?php

namespace App\Http\Controllers\Backend;

use App\Category;
use App\Product;
use App\User;
use Cviebrock\EloquentSluggable\Services\SlugService;

use Illuminate\Support\Facades\Validator;
use function GuzzleHttp\Psr7\str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use MercurySeries\Flashy\Flashy;
use Illuminate\Validation\Rule;

class NotificationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        return view('backend.pages.notification');

    }

    public function sendNotification(Request $request) {

        $image = "";
        $photo_productG4 = $request->file('image');
        if (isset($photo_productG4)) {
            if ($photo_productG4->isValid()){
                $file_name =
                    uniqid('notification',true).str_random(5).'.'.$photo_productG4->getClientOriginalExtension();
                $image =$photo_productG4->storeAs('notification',$file_name);
                $image =  asset('uploads/'.$image) ;
            }
        }


        $res = $this->send_notification( $request->title, $request->detail, $image);


        if (json_decode($res)->message_id) {
            Flashy::success('Notification Sent. Id'.json_decode($res)->message_id);


        } else {
            Flashy::error('Try Again. '.$res);

        }

        return redirect()->back();

    }


    function send_notification($title, $detail, $image)
    {

        $api_key = env('FCM');

        $url    = 'https://fcm.googleapis.com/fcm/send';

         $data = array
        (
            'title' 	=> $title,
            'body' 	=> $detail,
            'message' 	=> $detail,
            'sound' => 'default',
            'image' => $image,
            'activity' => 'MainActivity'
        );

        $fields = array(

            'priority'  => "high",
            "to" =>  "/topics/all",
            'data'         => $data,
            'click_action' => '.MainActivity',
            'sound' => 'default',
            'badge' => '1',
            'time_to_live' => 300000,
            'delay_while_idle' => false,
        );

        $headers = array(
            'Authorization: key = ' . $api_key,
            'Content-Type: application/json'
        );

        // Open connection
        $ch = curl_init();
        // Set the url, number of POST vars, POST data
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        // Disabling SSL Certificate support temporarly
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($fields));

        // Execute post
        $result = curl_exec($ch);

        if($result === FALSE) {
            die('Curl failed: ' . curl_error($ch));
        }
        // Close connection
        curl_close($ch);


        //	echo $result;
        return $result;
    }


}
