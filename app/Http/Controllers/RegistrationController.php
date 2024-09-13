<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
class RegistrationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('registration');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request){

        $input = $request->all();

        if($input['name']!=null && $input['email'] && $input['pass']){
            $checkuser = User::where('name',$input['name'])->count();
            if($checkuser==0){
                if(!is_null($input['pass'])){
                    $input['password'] = Hash::make($input['pass']);
                }
                User::create($input);
                
                return redirect()->route('view_registration')->with('result',"Success !");
            }
        }
        return redirect()->route('view_registration')->with('name',"Пользователь с таким именем уже существует !");
        
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
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
