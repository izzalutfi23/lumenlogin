<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class Homecontroller extends Controller
{
    public function index(){
        return response()->json([
            'title' => 'Home',
            'user' => Auth()->user()
        ]);
    }
}
