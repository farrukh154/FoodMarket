<?php

namespace App\Http\Controllers;

use App\Models\Email;
use Illuminate\Http\Request;

class EmailController extends Controller
{
    public function create(Request $request){
        $input = $request->all();

        Email::create($input);

        return redirect()->route('aboutme');
    }

    public function index()
    {
        $order = Email::all();

        return view('admin.index',['page'=>'admin.emails','orders'=>$order]);
    }
}
