<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        return view('guess.welcome');
    }

    public function about()
    {
        return view('guess.about');
    }

    public function promo()
    {
        return view('guess.promo');
    }

    public function faq()
    {
        return view('guess.faq');
    }

    public function contact()
    {
        return view('guess.contact');
    }

    public function service1()
    {
        return view('guess.services.service1.service1');
    }

    public function detailservice1()
    {
        return view('guess.services.service1.detailservice');
    }

    public function deepdetailservice1()
    {
        return view('guess.services.service1.deepdetail-service');
    }

    public function service2()
    {
        return view('guess.services.service2.service2');
    }

    public function detailservice2()
    {
        return view('guess.services.service2.detailservice2');
    }

    public function detailServices2()
    {
        return view('guess.services.service2.detail-service2');
    }

    public function service3()
    {
        return view('guess.services.service3.service3');
    }

    public function locationservice3()
    {
        return view('guess.services.service3.location-service3');
    }

    public function service4()
    {
        return view('guess.services.service4');
    }

    public function service5()
    {
        return view('guess.services.service5');
    }

    
}
