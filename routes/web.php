<?php

use App\Http\Controllers\MemberController;
use Illuminate\Support\Facades\Route;

Route::get('member/relationship/{id}', [MemberController::class, 'showRelationship'])->where('id', '[0-9]+');
Route::get('ajax/member/relationship/{id}', [MemberController::class, 'getRelationship'])->where('id', '[0-9]+');
