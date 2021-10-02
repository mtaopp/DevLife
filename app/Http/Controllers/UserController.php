<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Rules\MatchOldPassword;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        $user = Auth::user();


        return view('profile', $user);
        //return redirect(RouteServiceProvider::HOME);
    }

    public function changePassword()
    {
        return view('changePassword');
    }

    public function storePassword(Request $request)
    {

        // $request->validate([
        //     'current_password' => ['required', new MatchOldPassword],
        //     'new_password' => ['required'],
        //     'new_confirm_password' => ['same:new_password'],
        // ]);

        // User::find(auth()->user()->id)->update(['password'=> Hash::make($request->new_password)]);

        // dd('Password change successfully.');
    }

    /**
     * Add a profile picture.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function addImage(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        $user = Auth::user();
        return view('profileEdit', $user);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        // $request->validate([
        //     'firstname' => ['required', 'string', 'max:30'],
        //     'lastname' => ['required', 'string', 'max:40'],
        //     'username' => ['required', 'string', 'max:30', 'unique:users'],
        //     'email' => ['required', 'string', 'email', 'max:50', 'unique:users'],
        // ]);
        // die();
        //
        // echo $user;
        // $user->firstname = $request->firstname;
        // $user->lastname = $request->lastname;
        // $user->email = $request->email;

        // echo '<pre>';
        // var_dump($user);
        // //var_dump($request->all());
        // echo '</pre>';



        $user = Auth::user();
        return view('profile', $user);
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}
