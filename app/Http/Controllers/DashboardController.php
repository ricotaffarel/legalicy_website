<?php

namespace App\Http\Controllers;

use App\Models\ChoiseUs;
use App\Models\Service;
use App\Models\ServiceCategory;
use App\Models\Slider;
use App\Models\Discount;
use App\Models\About;
use App\Models\Contact;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    function index()
    {
        $slider = Slider::count();
        $service = Service::count();
        $service_category = ServiceCategory::count();
        $choiseus = ChoiseUs::count();
        $discounts = Discount::count();
        $abouts = About::all();
        $contacts = Contact::all();

        $data = [
            "slider" => $slider,
            "service" => $service,
            "service_category" => $service_category,
            "choiseus" => $choiseus,
            "discounts" => $discounts,
            "abouts" => $abouts,
            "contacts" => $contacts,
        ];

        return view('admin.dashboard', $data);
    }
}