<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;

class PageController extends Controller
{
    public function index()
    {
    	return view('pages.index');
    }

    public function services()
		{
    	$services = Service::latest()->get();
    	return view('pages.services', ['services' => $services]);
		}

		public function serviceDetails(Service $service)
		{
			return view('pages.service-details', ['service' => $service]);
		}
}
