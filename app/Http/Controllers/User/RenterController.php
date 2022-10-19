<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RenterController extends Controller
{
    public function index(){
        return view('user.renter');
    }
}
