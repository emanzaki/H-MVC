<?php

namespace Customers\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Customers extends Controller
{
    public function index(){
        return view('customers::backend.index');
    }
    
}
