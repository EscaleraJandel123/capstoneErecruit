<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    // public function adminpage()
    // {
    //     return view("admin/index");
    // }
    // public function applicantPage()
    // {
    //     return view("applicant/index");
    // }
    public function index()
    {
        return view("/homepage/homepage");
        // return redirect()->to('ApplicantLogin');
    }
}
