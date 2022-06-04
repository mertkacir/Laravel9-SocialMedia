<?php

namespace App\Http\Controllers;
use App\Models\Setting;
use App\Models\Message;


use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index()
    {
        $page = 'home';
        $setting = Setting::first();
        return view('home.index',[
            'page' => $page,
            'setting' => $setting,
        ]);
    }

    public function about()
    {

        $setting = Setting::first();
        return view('home.about',[
            'setting' => $setting,
        ]);
    }

    public function references()
    {
        $setting = Setting::first();
        return view('home.references',[
            'setting' => $setting,
        ]);
    }

    public function contact()
    {
        $setting = Setting::first();
        return view('home.contact',[
            'setting' => $setting,
        ]);
    }

    public function storemessage(Request $request)
    {
        $data = new Message();
        $data->name = $request->input('name');
        $data->email = $request->input('email');
        $data->subject = $request->input('subject');
        $data->phone = $request->input('phone');
        $data->ip = request()->ip();
        $data->message = $request->input('message');
        $data->save();

        return redirect()->route('contact')->with('info','Your message has been sent,Thank you.');


    }


}
