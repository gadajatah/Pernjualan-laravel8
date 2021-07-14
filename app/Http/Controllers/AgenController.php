<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AgenController extends Controller
{
    public function index()
    {
        $agens = User::get()->all();
        return view('user.agen', compact('agens'));
    }
}
