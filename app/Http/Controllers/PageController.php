<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Gallery;
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

		public function articles()
		{
			return view('pages.articles');
		}

		public function articleDetails(Article $article)
		{
			return view('pages.article-details', ['article' => $article]);
		}

		public function gallery()
		{
			$images = Gallery::latest()->get();
			return view('pages.gallery', ['images' => $images]);
		}
}
