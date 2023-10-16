<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slider;
use App\Models\ChoiseUs;
use App\Models\About;
use App\Models\Contact;
use App\Models\Testimonial;
use App\Models\Faq;
use App\Models\Discount;
use App\Models\Service;
use App\Models\ServiceCategory;

class WelcomeController extends Controller
{
    public function index()
    {
        $sliders = Slider::all();
        $choisesUs = ChoiseUs::all();
        $abouts = About::all();
        $testimonials = Testimonial::all();
        $contacts = Contact::all();
        $categories = ServiceCategory::all();
        return view('guess.welcome', compact('categories', 'sliders', 'choisesUs', 'testimonials', 'abouts', 'contacts'));
    }

    public function about()
    {
        $choisesUs = ChoiseUs::all();
        $abouts = About::all();
        $contacts = Contact::all();
        $categories = ServiceCategory::all();
        return view('guess.about', compact('choisesUs', 'abouts', 'contacts', 'categories'));
    }

    public function promo()
    {
        $contacts = Contact::all();
        $abouts = About::all();
        $discounts = Discount::all();
        $categories = ServiceCategory::all();
        return view('guess.promo', compact('contacts', 'discounts', 'categories', 'about'));
    }

    public function faq()
    {
        $contacts = Contact::all();
        $faqs = Faq::all();
        $abouts = About::all();
        $categories = ServiceCategory::all();
        return view('guess.faq', compact('contacts', 'faqs', 'categories', 'abouts'));
    }

    public function contact()
    {
        $contacts = Contact::all();
        $abouts = About::all();
        $categories = ServiceCategory::all();
        return view('guess.contact', compact('contacts', 'categories', 'abouts'));
    }

    public function service(string $id)
    {
        $category_id = $id;
        $services = Service::where('category_id', $category_id)->get();
        $categories = ServiceCategory::all();
        $category = ServiceCategory::find($id);
        $abouts = About::all();
        $contacts = Contact::all();
        return view('guess.service', compact('categories', 'category', 'abouts', 'contacts', 'services'));
    }

    public function serviceDetail(string $id)
    {
        $services = Service::find($id);
        $categories = ServiceCategory::all();
        $abouts = About::all();
        $contacts = Contact::all();
        return view('guess.service-detail', compact('categories', 'abouts', 'contacts', 'services'));
    }

    // public function service1()
    // {
    //     $contacts = Contact::all();
        
    //     $categories = ServiceCategory::all();
    //     return view('guess.services.service1.service1', compact('contacts'));
    // }

    // public function detailservice1()
    // {
    //     $contacts = Contact::all();
    //     $categories = ServiceCategory::all();
    //     return view('guess.services.service1.detailservice', compact('contacts'));
    // }

    // public function deepdetailservice1()
    // {
    //     $contacts = Contact::all();
    //     return view('guess.services.service1.deepdetail-service', compact('contacts'));
    // }

    // public function service2()
    // {
    //     $contacts = Contact::all();
    //     $categories = ServiceCategory::all();
    //     $abouts = About::all();
    //     return view('guess.services.service2.service2', compact('contacts', 'abouts', 'categories'));
    // }

    // public function detailservice2()
    // {
    //     $contacts = Contact::all();
    //     $categories = ServiceCategory::all();
    //     $abouts = About::all();
    //     return view('guess.services.service2.detailservice2', compact('contacts', 'abouts', 'categories'));
    // }

    // public function detailServices2()
    // {
    //     $contacts = Contact::all();
    //     return view('guess.services.service2.detail-service2', compact('contacts'));
    // }

    // public function service3()
    // {
    //     $contacts = Contact::all();
    //     return view('guess.services.service3.service3', compact('contacts'));
    // }

    // public function locationservice3()
    // {
    //     $contacts = Contact::all();
    //     return view('guess.services.service3.location-service3', compact('contacts'));
    // }

    // public function service4()
    // {
    //     $contacts = Contact::all();
    //     return view('guess.services.service4', compact('contacts'));
    // }

    // public function service5()
    // {
    //     $contacts = Contact::all();
    //     return view('guess.services.service5', compact('contacts'));
    // }

    
}
