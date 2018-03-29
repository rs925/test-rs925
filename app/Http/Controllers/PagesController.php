<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    function index()
    {return view('Pages.index');}

    function contact()
    {return view('Pages.contact')}


}
