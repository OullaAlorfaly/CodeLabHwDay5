<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
   public function  getHome()
   {   $names = null;
       return view('pages.home', compact('names'));

   }

    public function  getAbout()
    {
        return view('pages.about');
    }

    public function  getVideos()
    {
        return view('pages.videos');
    }

    public function  getContact()
    {
        return view('pages.contact');
    }

    public function  getSponsors()
    {
        return view('pages.sponsors');
    }

    public function  getSignIn()
    {
        return view('pages.signin');
    }
    public function  getSignOut()
    {
        return view('pages.signout');
    }

}
