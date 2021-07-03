<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MailGunController extends Controller
{
    //
    public function index(){
        return view('mailgun');
    }
}
