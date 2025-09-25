<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\MemberRequest;
use App\Models\Member;
use App\Models\MemberContact;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;

class MemberController extends Controller
{
    public function index()
    {
        Gate::authorize('admin');
        $members = Member::with(['ministries', 'contact', 'status'])->orderBy('created_at', 'desc')->paginate(6);
     
        return view('member.index', compact('members'));
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
            'phone_number_1' => $request->phone_number_1,
            'phone_number_2' => $request->phone_number_2
        ]);

        DB::commit();
        return redirect()->route('member.index');
    }

    public function edit()
    {
        return 'Precisa fazer';
    }
}
