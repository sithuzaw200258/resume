<?php

namespace App\Http\Controllers;

use App\Models\UserDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreUserDetailRequest;
use App\Http\Requests\UpdateUserDetailRequest;

class UserDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $details = Auth::user()->details;
        return view('users.index',compact('details'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreUserDetailRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUserDetailRequest $request)
    {
        // return $request->photo->extension(); 
        $user = new UserDetail();
        $user->user_id = Auth::id();
        $user->name = $request->name;
        $user->position = $request->position;
        $user->objective = $request->objective;

        if ($request->hasFile('photo')) {
            $fileName = uniqid()."_user_image.".$request->photo->extension();
            $request->photo->storeAs("public",$fileName);

            $user->photo = $fileName;
        }

        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->address = $request->address;
        
        $user->save();

        return redirect()->route('educations.create')->with('status',"User is created successfully.");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\UserDetail  $userDetail
     * @return \Illuminate\Http\Response
     */
    public function show(UserDetail $userDetail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\UserDetail  $userDetail
     * @return \Illuminate\Http\Response
     */
    public function edit(UserDetail $userDetail)
    {
        return view('users.edit',compact('userDetail'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateUserDetailRequest  $request
     * @param  \App\Models\UserDetail  $userDetail
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUserDetailRequest $request, UserDetail $userDetail)
    {
        // return $request;
        $userDetail->user_id = Auth::id();
        $userDetail->name = $request->name;
        $userDetail->position = $request->position;
        $userDetail->objective = $request->objective;

        if ($request->hasFile('photo')) {
            $fileName = uniqid()."_user_image.".$request->photo->extension();
            $request->photo->storeAs("public",$fileName);

            $userDetail->photo = $fileName;
        }

        $userDetail->email = $request->email;
        $userDetail->phone = $request->phone;
        $userDetail->address = $request->address;
        
        $userDetail->update();
        

        return redirect()->route('user-details.index')->with('status',"User Detail is updated successfully.");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UserDetail  $userDetail
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserDetail $userDetail)
    {
        // return $userDetail;
        $userDetail->delete();
        return redirect()->route('user-details.create')->with('status','User Detail is deleted successfully.');
    }
}
