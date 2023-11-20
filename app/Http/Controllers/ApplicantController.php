<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApplicantController extends Controller
{
    public function index()
    {
        return view("applicant/dashboard");
    }
    public function login()
    {
        return view("applicant/login");
    }
    public function register()
    {
        return view("applicant/register");
    }
}
