<?php

namespace App\Http\Controllers\Backend;

use App\Feedback;
use App\Setting;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SettingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function index() {

        $settings = Setting::latest('updated_at')->first();

        return view('backend.pages.settings')
            ->with([
                'settings' => $settings
        ]);
    }

    public function update(Request $request){

        $rules = [
            'delivery_cost' => 'required'
        ];

        $customMessages = [
//            'name.required' => 'Yo, what should I call you?',
//            'email.required' => 'We need your email address also',
        ];
        $this->validate($request, $rules, $customMessages);

        $settings = Setting::latest('updated_at')->first();
        if ($settings){
            $settings->delivery_cost =  $request->delivery_cost;
            $settings->update();
        }
        else{
            Setting::Create(
                ['delivery_cost' => $request->delivery_cost]
            );
        }



        return redirect()->route('backend.settings.index');
    }
}
