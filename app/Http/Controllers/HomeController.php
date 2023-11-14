<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use RalphJSmit\Laravel\SEO\Support\SEOData;

class HomeController extends Controller
{
    public function index(): View
    {

        $seoData=new SEOData(
            title: "Home"." - ".config('app.name'),
            description: "Blogs about PHP, Laravel",
            image: "websitelogo",
            site_name: config('app.name'),
            locale: "en_US",
            url: route("home"),
            type:'website',
        );

        return view('pages.home.index',['seoData'=>$seoData]);
    }

    public function privacy(): View{

        $seoData=new SEOData(
            title: "Privacy Policy"." - ".config('app.name'),
            description: "Thank you for visiting phphint.com, an online blogging platform dedicated to PHP, Laravel, and programming. At http://phphint.com.test, we are committed to protecting your privacy and ensuring the security of your personal information. This Privacy Policy explains how we collect, use, and protect your data. By using our website, you consent to the practices described in this policy.",
            image: "websitelogo",
            site_name: config('app.name'),
            locale: "en_US",
            url: route("privacy"),
            type:'website',
        );

        return view('pages.home.privacy',['seoData'=>$seoData]);
    }

    public function contact(): View{

        $seoData=new SEOData(
            title: "Contact"." - ".config('app.name'),
            description: "Contact me - we do appreciate your time",
            image: "websitelogo",
            site_name: config('app.name'),
            locale: "en_US",
            url: route("contact"),
            type:'website',
        );
        return view("pages.about.index",['seoData'=>$seoData]);
    }
}
