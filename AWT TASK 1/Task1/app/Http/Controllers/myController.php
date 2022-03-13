<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class myController extends Controller
{
    //
    public function ServicePage()
    {
        $product=[
            "Name"=>"Perfume",
            "Brand"=>"Fog",
            "Category"=>"Men",
            "Quantity"=>"50",
            "Price"=>"800",

        ];
        return view('Service')->with('product',$product);

    }

    public function HomePage()
    {
        return view('Home');
    }

    public function ContactPage()
    {
        return view('Contact');
    }

    public function AboutPage()
    {
        return view('About');
    }

    public function TeamsPage()
    {
        return view('Teams');
    }
 
}
