<?php

namespace App\Controllers;
use App\Models\UserModel;

class Pages extends BaseController
{
    public function index()
    {
        $data['nama'] = "Home";
        return view('home', $data);
        
    }

    public function about(){
        $data['nama'] = "about";
    	return view('about', $data);
    }

    public function contact(){
        $data['nama'] = "contact";
    	return view('contact', $data);
    }

    public function kurs(){
        $data['nama'] = "Kurs Lain";
        return view('kurs', $data);
    }

}
