<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Header;

class HeaderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $header = Header::get();

        return view('admin.index',['page'=>'admin.header','header'=>$header[0]]);
    }
    public function getHeader()
    {
        $header = Header::get();

        $return = [
            'data'=> $header
        ];

        return response()->json($return);

        // JS fetch
        // Install Postman

    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
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
    public function update(Request $request)
    {
        $input = $request->all();
        
        $header = Header::get();

        if($input['image']=="" || $input['image']==null){
            unset($input['image']);
        }else{
            $input['image'] = $request->file('image')->store('headerImages','public');
        }

        $header[0]->update($input);

        return redirect()->route('headerchange');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
