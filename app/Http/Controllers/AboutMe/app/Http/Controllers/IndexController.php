<?php

namespace App\Http\Controllers;

use App\Models\Body;
use App\Models\Booking;
use Illuminate\Http\Request;
use App\Models\Header;
use App\Models\Photo;
use App\Models\Project;
use App\Models\Skills;
use App\Models\Work;

class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $header = Header::get();
       $body = Body::get();
       $skills = Skills::get();
       $work = Work::get();
       $booking = Booking::get();
       $photo = Photo::all();
       $project = Project::all();
       return view('welcome', [
        'header'=>$header[0],
        'body'=>$body[0],
        'project'=>$project,
        'skills'=>$skills[0],
        'work'=>$work[0],
        'booking'=>$booking[0],
        'photo'=>$photo,

    ]);
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
