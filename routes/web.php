<?php

use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Route;


Route::get('/',                                 [ PagesController::class, 'index' ]);
Route::get('customization',                     [ PagesController::class, 'customization' ]);
Route::get('component/alert',                   [ PagesController::class, 'alert' ]);
Route::get('component/avatar',                  [ PagesController::class, 'avatar' ]);
Route::get('component/button',                  [ PagesController::class, 'button' ]);
Route::get('component/card',                    [ PagesController::class, 'card' ]);
Route::get('component/checkbox',                [ PagesController::class, 'checkbox' ]);
Route::get('component/datepicker',              [ PagesController::class, 'datepicker' ]);
Route::get('component/dropdown',                [ PagesController::class, 'dropdown' ]);
Route::get('component/filepicker',              [ PagesController::class, 'filepicker' ]);
Route::get('component/list',                    [ PagesController::class, 'list' ]);
Route::get('component/modal',                   [ PagesController::class, 'modal' ]);
Route::get('component/notification',            [ PagesController::class, 'notification' ]);
Route::get('component/process-indicator',       [ PagesController::class, 'process-indicator' ]);
Route::get('component/progress-bar',            [ PagesController::class, 'progress-bar' ]);
Route::get('component/tab',                     [ PagesController::class, 'tab' ]);
Route::get('component/table',                   [ PagesController::class, 'table' ]);
Route::get('component/tag',                     [ PagesController::class, 'tag' ]);
Route::get('component/textbox',                 [ PagesController::class, 'textbox' ]);
Route::get('component/tooltip',                 [ PagesController::class, 'tooltip' ]);
Route::get('component/textarea',                [ PagesController::class, 'textarea' ]);
Route::get('component/centered-content',        [ PagesController::class, 'centered-content' ]);
Route::get('layout/error-pages',                [ PagesController::class, 'error-pages' ]);
Route::get('layout/app',                        [ PagesController::class, 'app_layout' ]);