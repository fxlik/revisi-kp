<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Survey;

class Admin2Controller extends Controller
{
    /**
     * Admin index
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct(){
        $this->middleware('admin');
    }

    public function getIndex()
    {
        $surveys = Survey::all();

        return view('admin.index', compact('surveys'));
    }
}
