<?php

namespace App\Http\Controllers;
use App\Models\Setting;


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



}
