<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Imports\UsersImport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    //
    public function index(){
        return view('dashboard');
    }
}
