<?php

namespace App\Http\Controllers;

use App\Models\ChoiseUs;
use App\Models\Service;
use App\Models\ServiceCategory;
use App\Models\Slider;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    function index()
    {
        $slider = Slider::count();
        $service = Service::count();
        $service_category = ServiceCategory::count();
        $choiseus = ChoiseUs::count();

        $data = [
            "slider" => $slider,
            "service" => $service,
            "service_category" => $service_category,
            "choiseus" => $choiseus,
        ];

        return view('admin.dashboard', $data);
    }
}