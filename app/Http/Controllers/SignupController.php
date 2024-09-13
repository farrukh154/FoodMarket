<?php

namespace App\Http\Controllers;

use App\Models\Signup;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class SignupController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return  view('signup');
    }

    public function auth(Request $request){
        $input = $request->all();
        
        $user = User::where('name', $input['name'])->first();
        // dd($input['password'].$user->password);
        if(Hash::check($input['pass'], $user->pass)){
            return redirect()->route('registration');
        }else{
            return redirect()->route('home');
        }


    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Signup $signup)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Signup $signup)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Signup $signup)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Signup $signup)
    {
        //
    }
}
