<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function post(Request $request) {
    	return response()->json([
    		'data' => "CAN THE GATE OPEN PLS"
			]);
		}
}
