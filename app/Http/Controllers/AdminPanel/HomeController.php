<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;

class HomeController extends Controller
{
   public function index(){
     return view('admin.index');
   }
   public function setting(){
       $data= Setting::first();
       if($data === null){
           $data = new Setting();
           $data -> title = 'Socialize';
           $data -> save();
           $data= Setting::first();
       }
    return view("admin.setting",['data' => $data]);
  }
  public function settingUpdate(Request $request)
  {
      $id=$request->input('id');
      $data = Setting::find($id);
      $data -> aboutus = $request -> input('aboutus');
      $data -> contact = $request -> input('contact');
      $data -> references = $request -> input('references');
      $data -> title = $request -> input('title');
      $data -> keywords = $request -> input('keywords');
      $data -> description = $request -> input('description');
      $data -> status = $request -> input('status');
      $data -> save();
      return redirect()->route('admin.setting');

  }
}
