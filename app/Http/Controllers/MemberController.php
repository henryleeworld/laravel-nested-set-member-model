<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;

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
