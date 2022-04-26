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
    public function card()                  { return view('docs.card'); }
    public function checkbox()              { return view('docs.checkbox'); }
    public function datepicker()            { return view('docs.datepicker'); }
    public function dropdown()              { return view('docs.dropdown'); }
    public function emptystate()            { return view('docs.emptystate'); }
    public function filepicker()            { return view('docs.filepicker'); }
    public function radiobutton()           { return view('docs.radiobutton'); }
    public function modal()                 { return view('docs.modal'); }
    public function notification()          { return view('docs.notification'); }
}
