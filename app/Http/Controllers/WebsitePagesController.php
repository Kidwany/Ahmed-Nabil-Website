<?php

namespace App\Http\Controllers;

use App\Models\File;
use App\Models\Album;
use App\Models\Blog;
use App\Models\Gallery;
use App\Models\Contact;
use App\Models\Image;
use App\Models\Message;
use App\Models\Slider;
use App\Models\Service;
use App\Models\Team;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;

class WebsitePagesController extends Controller
{
    public function index()
    {
        $services = Service::with('service_'.currentLang(), 'parentService')->where('parent_service_id', null)->limit(9)->get();
        $subServices = Service::with('service_'.currentLang(), 'parentService')->where('parent_service_id', '!=', null)->get();
        $slides = Slider::with('slider_'.currentLang(), 'image')->get();
        $images = Gallery::with('image')->limit(8)->get();
        $members  = Team::with('team_en', 'team_ar', 'image')->get();
        $testimonials = Testimonial::with('testimonial_en', 'testimonial_ar')->get();
        return view('website.welcome', compact( 'slides', 'images', 'services', 'subServices', 'members', 'testimonials'));
    }

    public function about()
    {
        $testimonials = Testimonial::with('testimonial_en', 'testimonial_ar')->get();
        return view('website.about', compact('testimonials'));
    }


    public function team()
    {
        $ceo = Team::with('team_en', 'team_ar')->where('is_ceo', '!=', null)->first();
        $testimonials = Testimonial::with('testimonial_en', 'testimonial_ar')->get();
        $members = Team::with('team_en', 'team_ar', 'image')->where('is_ceo', null)->get();
        return view('website.team', compact('members', 'ceo', 'testimonials'));
    }


    public function reserve()
    {
        $testimonials = Testimonial::with('testimonial_en', 'testimonial_ar')->get();
        return view('website.reserve', compact('testimonials'));
    }


    public function blog()
    {
        $testimonials = Testimonial::with('testimonial_en', 'testimonial_ar')->get();
        $blogs = Blog::with('blog_'.currentLang(), 'image')->orderBy('created_at', 'desc')->get();
        return view('website.blog', compact('blogs', 'testimonials'));
    }


    public function blogDetails($id)
    {
        $testimonials = Testimonial::with('testimonial_en', 'testimonial_ar')->get();
        $blog = Blog::with('blog_en', 'blog_ar', 'image')->find($id);
        $latestPosts = Blog::with('blog_en', 'blog_ar')
            ->where('id', '!=', $id)
            ->orderBy('created_by', 'desc')
            ->limit(3)->get();
        return view('website.blogDetails', compact('blog', 'testimonials', 'latestPosts'));
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

    public function offers()
    {
        $testimonials = Testimonial::with('testimonial_en', 'testimonial_ar')->get();
        return view('website.offers', compact('contact', 'testimonials'));
    }

    public function album()
    {
        $type = Input::get('type');
        if ($type == 'image')
        {
            $albums = Album::with('album_en', 'album_ar', 'image')
                ->where('type', 1)
                ->orderBy('created_by', 'desc')->get();
            $testimonials = Testimonial::with('testimonial_en', 'testimonial_ar')->get();
            return view('website.album', compact( 'testimonials', 'albums'));
        }
        elseif ($type == 'video')
        {
            $albums = Album::with('album_en', 'album_ar', 'image')
                ->where('type', 2)
                ->orderBy('created_by', 'desc')->get();
            $testimonials = Testimonial::with('testimonial_en', 'testimonial_ar')->get();
            return view('website.album', compact( 'testimonials', 'albums'));
        }
    }


    public function albumDetails($id)
    {
        $type = Input::get('type');

        if ($type == 1)
        {
            $imagesAlbum = Album::with('album_en', 'album_ar', 'images')->find($id);
            $testimonials = Testimonial::with('testimonial_en', 'testimonial_ar')->get();
            $videosAlbum = null;
            return view('website.albumDetails', compact( 'testimonials', 'imagesAlbum', 'videosAlbum'));
        }
        elseif ($type == 2)
        {
            $videosAlbum = Album::with('album_en', 'album_ar', 'videos')->find($id);
            $testimonials = Testimonial::with('testimonial_en', 'testimonial_ar')->get();
            $imagesAlbum = null;
            return view('website.albumDetails', compact( 'testimonials', 'videosAlbum', 'imagesAlbum'));
        }
        else
        {
            return redirect()->back();
        }

    }



    public function contact()
    {
        $testimonials = Testimonial::with('testimonial_en', 'testimonial_ar')->get();
        $contact = Contact::orderby('id', 'desc')->first();
        return view('website.contact', compact('contact', 'testimonials'));
    }


    public function serviceDetails($id)
    {
        $testimonials = Testimonial::with('testimonial_en', 'testimonial_ar')->get();
        $singleService = Service::find($id);
        return view('website.serviceDetails', compact('singleService', 'testimonials'));
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
            'file_id'       => 'bail|mimes:jpeg,jpg,png,gif,doc,docx,pdf,csv,xls',
        ], [], [
            'email'         => 'Email',
            'phone'         => 'Phone',
            'name'          => 'Name ',
            'message'       => 'Message',
        ]);

        if ($uploadedFile = $request->file('file_id'))
        {
            $fileName = time() . $uploadedFile->getClientOriginalName();
            $uploadedFile->move('dashboardImages/contactFiles', $fileName);
            $filePath = 'dashboardImages/contactFiles/'.$fileName;
            $file = File::create(['name' => $fileName, 'path' => $filePath]);
            $input['file_id'] = $file->id;
        }

        $message = new Message;
        $message->name = $input['name'];
        $message->email = $input['email'];
        $message->phone = $input['phone'];
        $message->title = $input['title'];
        $message->file_id = $input['file_id'];
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


}

























