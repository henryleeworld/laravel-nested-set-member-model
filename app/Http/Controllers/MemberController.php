<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;
use DB;

class MemberController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function showRelationship(Request $request, $id)
    {
        return view('member', ['id' => $id]);
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function getRelationship(Request $request, $id)
    {
		return response()->json(Member::descendantsAndSelf($id)->toTree()->first());
	}
}
