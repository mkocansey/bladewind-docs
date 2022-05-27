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
    public function centered_content()      { return view('docs.centered-content'); }
    public function checkbox()              { return view('docs.checkbox'); }
    public function datepicker()            { return view('docs.datepicker'); }
    public function dropdown()              { return view('docs.dropdown'); }
    public function emptystate()            { return view('docs.emptystate'); }
    public function filepicker()            { return view('docs.filepicker'); }
    public function laravel8()              { return view('docs.laravel8'); }
    public function line_graph()            { return view('docs.horizontal-line-graph'); }
    public function list()                  { return view('docs.list'); }
    public function radiobutton()           { return view('docs.radiobutton'); }
    public function rating()                { return view('docs.rating'); }
    public function modal()                 { return view('docs.modal'); }
    public function notification()          { return view('docs.notification'); }
    public function process_indicator()     { return view('docs.process-indicator'); }
    public function progress_bar()          { return view('docs.progress-bar'); }
    public function pagination()            { return view('docs.pagination'); }
    public function spinner()               { return view('docs.spinner'); }
    public function statistic()             { return view('docs.statistic'); }
    public function tag()                   { return view('docs.tag'); }
    public function tab()                   { return view('docs.tab'); }
    public function table()                 { return view('docs.table'); }
    public function textbox()               { return view('docs.textbox'); }
    public function textarea()              { return view('docs.textarea'); }
    public function timepicker()            { return view('docs.timepicker'); }
    public function toggle()                { return view('docs.toggle'); }
    public function tooltip()               { return view('docs.tooltip'); }
    public function app_layouts()           { return view('docs.app-layouts'); }
    public function spa()                   { return view('docs.spa'); }
    public function errors()                { return view('docs.error-pages'); }
}
