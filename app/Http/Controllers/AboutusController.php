<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class AboutusController extends Controller
{

    //Company profile
    public function getCompanyProfile()
    {
        return view('about-us/company-profile');
    }

}