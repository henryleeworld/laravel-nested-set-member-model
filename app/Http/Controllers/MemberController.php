<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Member;
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
        //DB::enableQueryLog();
		/*
        $member = [
            ['name' => '瑪莉歐', 'children' => [
                ['name' => '林克', 'children' => [
                    ['name' => '克勞德．史托萊夫', 'children' => [
                        ['name' => '克雷多斯'],
                        ['name' => 'Sonic', 'children' => [
                            ['name' => '尼克‧伯利克', 'children' => [
                                ['name' => '普萊斯隊長', 'children' => [
                                    ['name' => '耀西'],
                                ]],
                                ['name' => '卡比', 'children' => [
                                    ['name' => 'Carl Johnson'],
                                ]],
                            ]],
                            ['name' => '莎姆絲．阿蘭'],
                        ]],
                    ]],
                    ['name' => '小精靈'],
                ]],
                ['name' => 'Master Chief'],
                ['name' => 'Solid Snake', 'children' => [
                    ['name' => '蘿拉．卡芙特'],
                    ['name' => '高登．弗里曼', 'children' => [
                        ['name' => 'Crash', 'children' => [
                            ['name' => '拉捷特'],
                            ['name' => '奈森‧德瑞克', 'children' => [
                                ['name' => 'Marcus Fenix', 'children' => [
                                    ['name' => '洛克人'],
                                ]],
                                ['name' => '皮卡丘', 'children' => [
                                    ['name' => 'Sam Fisher'],
                                ]],
                            ]],
                        ]],
                        ['name' => 'John MacTavish'],
                    ]],
                ]],
            ]]
        ];
        Member::buildTree($member);
        */
        /*
        $node = Member::where('name', '=', 'Sonic')->first();
        echo '上線：' . PHP_EOL;
        foreach($node->getAncestors() as $ancestor) {
            echo "{$ancestor->name}" . PHP_EOL;
        }
		echo PHP_EOL;
        echo '下線：' . PHP_EOL;
        foreach($node->getDescendants() as $descendant) {
            echo "{$descendant->name}" . PHP_EOL;
        }		
        $quries = DB::getQueryLog();
        dd($quries);
        */
        return view('member', ['id' => $id]);
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function getRelationship(Request $request, $id)
    {
		return response()->json(Member::where('id', '=', $id)->first()->getDescendantsAndSelf()->toHierarchy()->first());
	}
}
