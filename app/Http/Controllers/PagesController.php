<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()                 { return view('docs.index'); }
    public function customization()         { return view('docs.customization'); }
    public function alert()                 { return view('docs.alert'); }
    public function avatar()                { return view('docs.avatar'); }
    public function button()                { return view('docs.button'); }
}
