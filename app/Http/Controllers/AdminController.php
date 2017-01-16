<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Survey;

class AdminController extends Controller
{

    public function __construct(){
        $this->middleware('admin');
    }

    public function index2(){
        return view('admin.index2');
    }

    
}
