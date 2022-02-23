<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Models\Client;
use App\Models\FrequentlyAskedQue;
use App\Models\Services;
use App\Models\SiteSettings;
use App\Models\Testimonials;
use App\Models\Technology;
use App\Models\Career;


class SiteController extends Controller
{
    protected $banner;
    protected $client;
    protected $frequentlyAskedQue;
    protected $services;
    protected $testimonials;
    protected $technology;
    protected $career;

    public function __construct() {
        $this->banner = new Banner();
        $this->client = new Client();
        $this->frequentlyAskedQue = new FrequentlyAskedQue();
        $this->services = new Services();
        $this->testimonials = new Testimonials();
        $this->technology = new Technology();
        $this->sitesetting = new SiteSettings();
        $this->career = new Career();
    }

    public function index() {
        $setting = $this->sitesetting->first();
        $banner = $this->banner::where('status', 1)->get();
        $service = $this->services::where('status', 1)
                            ->where('feature', 1)->get();
        $testimonial = $this->testimonials::where('status', 1)
                            ->where('feature', 1)->get();
        $technologies = $this->technology::where('status', 1)->get();
        $client = $this->client::where('status', 1)->get();

        return view('frontend.home', compact('setting', 'banner', 'service', 'testimonial', 'technologies', 'client'));
    }

    public function services() {
        $setting = $this->sitesetting->first();
        $service = $this->services::where('status', 1)->get();
        $technologies = $this->technology::where('status', 1)->get();
        $client = $this->client::where('status', 1)->get();

        return view('frontend.services', compact('setting', 'service', 'technologies', 'client'));
    }

    public function about() {
        $setting = $this->sitesetting->first();
        
        return view('frontend.about', compact('setting'));
    }

    public function faqs() {
        $setting = $this->sitesetting->first();
        $faqs = $this->frequentlyAskedQue::where('status', 1)->get();

        return view('frontend.faq', compact('setting', 'faqs'));
    }

    public function privacy() {
        $setting = $this->sitesetting->first();
        return view('frontend.privacy', compact('setting'));
    }

    public function conditions() {
        $setting = $this->sitesetting->first();
        return view('frontend.termsandcondition', compact('setting'));
    }

    public function contact() {
        $setting = $this->sitesetting->first();
        return view('frontend.contact', compact('setting'));
    }

    public function career() {
        $setting = $this->sitesetting->first();
        $careers = $this->career::where('status', 1)->get();
        return view('frontend.career', compact('setting', 'careers'));
    }

    public function viewCareer($slug) {
        $setting = $this->sitesetting->first();
        $careers = $this->career::where('slug', $slug)->first();
        return view('frontend.viewCareer', compact('setting', 'careers'));
    }

    public function applyJob($id) {
        $setting = $this->sitesetting->first();
        $careers = $this->career::where('id', $id)->get();

        return view('frontend.vacancy-form', compact('setting', 'careers'));
    }

}
