<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    //
    public function __construct() {
        
    }

    public function index() {

    }

    public function get_userdata(Request $request) {
        echo $request->all();
    }
}
