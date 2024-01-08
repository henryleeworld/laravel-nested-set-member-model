<?php

use App\Http\Controllers\MemberController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('member/relationship/{id}', [MemberController::class, 'showRelationship'])->where('id', '[0-9]+');
Route::get('ajax/member/relationship/{id}', [MemberController::class, 'getRelationship'])->where('id', '[0-9]+');
