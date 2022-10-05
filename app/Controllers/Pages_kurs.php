<?php

namespace App\Controllers;

class Pages_kurs extends BaseController
{
	public function bca(){
        $data['nama'] = "BCA KURS";
    	return view('bca', $data);
    }

    public function bri(){
        $data['nama'] = "BRI KURS";
    	return view('bri', $data);
    }

    public function bni(){
        $data['nama'] = "BNI KURS";
    	return view('bni', $data);
    }

}