<?php

namespace App\Http\Controllers;

use App\Models\Ministry;
use App\Models\User;
use App\Models\Member;
use App\Models\MemberMinistry;
use \Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class MinistryController extends Controller
{
    //  create, store,  destroy
    public function index()
    {
        $ministries = Ministry::all()->where('is_active', 1);
        return view('ministry.index', compact('ministries'));
    }

    public function create()
    {
        dd('create ministry');
        //create view with form
    }

    public function edit($id)
    {
        $users = User::where('is_admin', 1)->get();
        $ministry = Ministry::where('id', $id)->with('leader')->first();
     
        return view('ministry.edit', compact('ministry', 'users'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:100',
            'description' => 'required',
            'image_url' => 'sometimes|image|max:1000',
            'leader_id' => 'nullable|exists:users,id',
            'is_active' => 'nullable|boolean',
        ]);

        
        $ministry = Ministry::findOrFail($id);

        $data = [
            'name' => $request->name,
            'description' => $request->description,
            'leader_id' => $request->leader_id,
            'is_active' => $request->has('is_active') ? 1 : 0
        ];

        if ($request->hasFile('image_url') ) {
            $fileName = uniqid() . '-' . $request->file('image_url')->getClientOriginalName();
            $path = $request->file('image_url')->storeAs('ministry_images', $fileName, 'public'); 
            $data['image_url'] = $path;
        }

        $ministry->update($data);

        return redirect()->route('ministry.index')->with('success', 'Ministério atualizado com sucesso.');
    }

    public function subscribe(Request $request, $id)
    {
        // here we must have to construct all the logic to subscribe the user to the ministry
        // for now, we'll just allow any user to subscribe in a ministry only clicking a button
        // later que can use a form and a specific logic to handle this... 

        $ministry = Ministry::findOrFail($id);
        $member = Member::where('id', Auth::id())->first();
    

        MemberMinistry::create([
            'member_id' => $member->id,
            'ministry_id' => $ministry->id
        ]);

        return redirect()->route('ministry.index')->with('success', 'Inscrição realizada com sucesso no ministério ');
    }
}
