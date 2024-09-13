<?php

namespace App\Http\Controllers;

use App\Models\Email;
use Illuminate\Http\Request;

class EmailController extends Controller
{
    public function create(Request $request)
    {
        $input = $request->all();

        Email::create($input);

        return redirect()->route('aboutme');
    }
}