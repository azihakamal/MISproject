<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Post;
use App\Tag;


class PageController extends Controller
{
    
    public function getwelcome()
    {
          
    return view('pages.welcome');
    }
    
     public function getcontact()
    {
        return view('pages.contact');
    }
    
     public function getabout()
    {
        return view('pages.about');
    }
    
    
   
    
}
