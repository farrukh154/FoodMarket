<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use Illuminate\Http\Request;


class PhotoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $photo = Photo::all();

        return view('admin.index',['page'=>'admin.photo','photo'=>$photo]);
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
    public function update(Request $request, int $id)
    {
        $input = $request->all();
        
        $photo  = Photo::find($id);

        
        if($input['image']=="" || $input['image']==null){
            unset($input['image']);
        }else{
            $input['image'] = $request->file('image')->store('photoImages','public');
        }


        $photo->update($input);

        return redirect()->route('photo');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
