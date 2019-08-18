<?php

namespace App\Http\Controllers;

use App\Models\Album;
use App\Models\Gallery;
use App\Models\Contact;
use App\Models\Image;
use App\Models\Message;
use App\Models\Slider;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;

class WebsitePagesController extends Controller
{
    public function index()
    {
        $slides = Slider::with('slider_'.currentLang(), 'image')->get();
        $images = Gallery::with('image')->limit(8)->get();
        return view('website.welcome', compact( 'slides', 'images'));
    }

    public function about()
    {
        return view('website.about', compact('og'));
    }

    public function gallery()
    {
        $images = Gallery::with('image')->where('video_url', null)->get();
        return view('website.gallery', compact( 'images'));
    }

    public function video()
    {
        $videos = Gallery::where('video_name', '!=' , null)->where('video_url', '!=', null )->get();
        return view('website.video', compact('videos'));
    }

    public function albums($id)
    {
        $album = Album::find($id);
        $images =  Image::where('album_id', $id)->get();
        return view('website.albums', compact('album', 'images'));
    }

    public function contact()
    {
        $contact = Contact::orderby('id', 'desc')->first();
        return view('website.contact', compact('contact'));
    }


    public function message(Request $request)
    {
        $input = Input::get();
        $this->validate($request,[
            'email'         => 'bail|required|email|max:100',
            'phone'         => 'bail|required|min:8|max:14',
            'title'         => 'bail|required|max:150',
            'name'          => 'bail|required|max:100',
            'message'       => 'bail|required|min:30|max:500',
        ], [], [
            'email'         => 'Email',
            'phone'         => 'Phone',
            'name'          => 'Name ',
            'message'       => 'Message',
        ]);

        $message = new Message;
        $message->name = $input['name'];
        $message->email = $input['email'];
        $message->phone = $input['phone'];
        $message->title = $input['title'];
        $message->message = $input['message'];

        $message->save();
        Session::flash('create', ' شكرا على تسجيلك ' . $message->name .  ' سنقوم بالتواصل معك خلال يومين عمل ');

        return redirect()->back();
    }


    /*
     public function service()
     {
         $shows = Show::with('ThumbImg', 'mainImg')->get();
         return view('website.shows', compact('shows'));
     }*/

    public function serviceDetails($id)
    {
        $serviceSingle = Service::find($id);
        return view('website.service_details', compact('serviceSingle'));
    }

}

























