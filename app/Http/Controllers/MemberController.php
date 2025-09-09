<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\MemberRequest;
use App\Models\Member;
use App\Models\MemberContact;
use Illuminate\Support\Facades\DB;

class MemberController extends Controller
{
    public function index()
    {
        $members = Member::all();
        return view('member.index', ['members' => $members]);
    }

    public function create()
    {
        return view('member.create');
    }

    public function store(MemberRequest $request)
    {
        DB::beginTransaction(); 

        $member = Member::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'birth_date' => $request->birth_date,
            'membership_start' => $request->membership_start ?? now(),
            'gender_id' => $request->gender_id,
            'situation_id' => 1
        ]);

        MemberContact::create([
            'member_id' => $member->id,
            'email' => $request->email,
            'telefone_1' => $request->telefone_1,
            'telefone_2' => $request->telefone_2
        ]);

        DB::commit();
        return redirect()->route('member.create');
    }
}
