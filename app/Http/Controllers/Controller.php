<?php

namespace App\Http\Controllers;
use App\Models\Contact;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;



     public function about()
    {
  
         return view('pages.about');
        
    }
     public function service()
    {
         
         return view('pages.service');
        
    }
     public function team()
    {
         
         return view('pages.team');
        
    }
     public function contact()
    {
         
         return view('pages.contact');
        
    }
   
}
