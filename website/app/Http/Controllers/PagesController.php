<?php

namespace App\Http\Controllers;
use App\Models\Contact;
use DB;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home() {
       
        return view('pages.home',);
      }
      public function about() {
       
        return view('pages.about',);
      }
      public function services() {
       
        return view('pages.services',);
      }
      public function gallery() {
       
        return view('pages.gallery',);
      }
      public function contact() {
       
        return view('pages.contact',);
      }
       
      public function save(Request $request) {
        $data =array();
        $data['email'] = $request->email;
        $data['password'] = $request->password;
        $data['comment'] = $request->comment;
          
        $contact=DB::table('contactemail')->insert($data);
     
        return redirect('/',);
      }
}
