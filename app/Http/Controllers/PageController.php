<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Gallery;
use App\Models\Team;
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
		
		public function successStories() {
			$stories = [
				"https://res.cloudinary.com/rohing/image/upload/v1666251548/androcare/success-stories/WhatsApp_Image_2022-10-12_at_5.17.17_PM_1.jpg",
				"https://res.cloudinary.com/rohing/image/upload/v1666251554/androcare/success-stories/WhatsApp_Image_2022-10-12_at_5.17.25_PM.jpg",
				"https://res.cloudinary.com/rohing/image/upload/v1666251553/androcare/success-stories/WhatsApp_Image_2022-10-12_at_5.17.23_PM_2.jpg",
				"https://res.cloudinary.com/rohing/image/upload/v1666251553/androcare/success-stories/WhatsApp_Image_2022-10-12_at_5.17.25_PM_2.jpg",
				"https://res.cloudinary.com/rohing/image/upload/v1666251552/androcare/success-stories/WhatsApp_Image_2022-10-12_at_5.17.24_PM.jpg",
				"https://res.cloudinary.com/rohing/image/upload/v1666251552/androcare/success-stories/WhatsApp_Image_2022-10-12_at_5.17.25_PM_1.jpg",
				"https://res.cloudinary.com/rohing/image/upload/v1666251551/androcare/success-stories/WhatsApp_Image_2022-10-12_at_5.17.23_PM.jpg",
				"https://res.cloudinary.com/rohing/image/upload/v1666251551/androcare/success-stories/WhatsApp_Image_2022-10-12_at_5.17.20_PM_1.jpg",
				"https://res.cloudinary.com/rohing/image/upload/v1666251560/androcare/success-stories/WhatsApp_Image_2022-10-12_at_5.31.29_PM.jpg",
				"https://res.cloudinary.com/rohing/image/upload/v1666251561/androcare/success-stories/WhatsApp_Image_2022-10-12_at_5.39.40_PM.jpg",
				"https://res.cloudinary.com/rohing/image/upload/v1666251560/androcare/success-stories/WhatsApp_Image_2022-10-12_at_5.39.40_PM_2.jpg",
				"https://res.cloudinary.com/rohing/image/upload/v1666251560/androcare/success-stories/WhatsApp_Image_2022-10-12_at_5.39.39_PM_2.jpg",
				"https://res.cloudinary.com/rohing/image/upload/v1666251560/androcare/success-stories/WhatsApp_Image_2022-10-12_at_5.39.40_PM_3.jpg",
				"https://res.cloudinary.com/rohing/image/upload/v1666251559/androcare/success-stories/WhatsApp_Image_2022-10-12_at_5.31.28_PM.jpg",
				"https://res.cloudinary.com/rohing/image/upload/v1666251559/androcare/success-stories/WhatsApp_Image_2022-10-12_at_5.39.40_PM_1.jpg",
				"https://res.cloudinary.com/rohing/image/upload/v1666251559/androcare/success-stories/WhatsApp_Image_2022-10-12_at_5.39.39_PM.jpg",
				"https://res.cloudinary.com/rohing/image/upload/v1666251558/androcare/success-stories/WhatsApp_Image_2022-10-12_at_5.39.38_PM.jpg",
				"https://res.cloudinary.com/rohing/image/upload/v1666251558/androcare/success-stories/WhatsApp_Image_2022-10-12_at_5.31.29_PM_1.jpg",
				"https://res.cloudinary.com/rohing/image/upload/v1666251558/androcare/success-stories/WhatsApp_Image_2022-10-12_at_5.31.29_PM_2.jpg",
				"https://res.cloudinary.com/rohing/image/upload/v1666251556/androcare/success-stories/WhatsApp_Image_2022-10-12_at_5.22.36_PM_1.jpg",
				"https://res.cloudinary.com/rohing/image/upload/v1666251556/androcare/success-stories/WhatsApp_Image_2022-10-12_at_5.31.28_PM_1.jpg",
				"https://res.cloudinary.com/rohing/image/upload/v1666251556/androcare/success-stories/WhatsApp_Image_2022-10-12_at_5.22.36_PM.jpg",
				"https://res.cloudinary.com/rohing/image/upload/v1666251556/androcare/success-stories/WhatsApp_Image_2022-10-12_at_5.22.36_PM_4.jpg",
				"https://res.cloudinary.com/rohing/image/upload/v1666251555/androcare/success-stories/WhatsApp_Image_2022-10-12_at_5.22.36_PM_3.jpg",
				"https://res.cloudinary.com/rohing/image/upload/v1666251555/androcare/success-stories/WhatsApp_Image_2022-10-12_at_5.17.24_PM_1.jpg",
				"https://res.cloudinary.com/rohing/image/upload/v1666251554/androcare/success-stories/WhatsApp_Image_2022-10-12_at_5.22.36_PM_2.jpg",
				"https://res.cloudinary.com/rohing/image/upload/v1666251555/androcare/success-stories/WhatsApp_Image_2022-10-12_at_5.22.35_PM.jpg",
				"https://res.cloudinary.com/rohing/image/upload/v1666251554/androcare/success-stories/WhatsApp_Image_2022-10-12_at_5.22.35_PM_1.jpg",
				"https://res.cloudinary.com/rohing/image/upload/v1666251550/androcare/success-stories/WhatsApp_Image_2022-10-12_at_5.17.20_PM.jpg",
				"https://res.cloudinary.com/rohing/image/upload/v1666251550/androcare/success-stories/WhatsApp_Image_2022-10-12_at_5.17.18_PM.jpg",
				"https://res.cloudinary.com/rohing/image/upload/v1666251550/androcare/success-stories/WhatsApp_Image_2022-10-12_at_5.17.19_PM_1.jpg",
				"https://res.cloudinary.com/rohing/image/upload/v1666251550/androcare/success-stories/WhatsApp_Image_2022-10-12_at_5.17.19_PM_2.jpg",
				"https://res.cloudinary.com/rohing/image/upload/v1666251549/androcare/success-stories/WhatsApp_Image_2022-10-12_at_5.17.16_PM.jpg",
				"https://res.cloudinary.com/rohing/image/upload/v1666251548/androcare/success-stories/WhatsApp_Image_2022-10-12_at_5.16.24_PM.jpg",
				"https://res.cloudinary.com/rohing/image/upload/v1666251549/androcare/success-stories/WhatsApp_Image_2022-10-12_at_5.17.18_PM_1.jpg",
				"https://res.cloudinary.com/rohing/image/upload/v1666251548/androcare/success-stories/WhatsApp_Image_2022-10-12_at_5.17.17_PM.jpg",
				"https://res.cloudinary.com/rohing/image/upload/v1666251548/androcare/success-stories/WhatsApp_Image_2022-10-12_at_5.16.25_PM_1.jpg",
				"https://res.cloudinary.com/rohing/image/upload/v1666251547/androcare/success-stories/WhatsApp_Image_2022-10-12_at_5.16.25_PM.jpg",
				"https://res.cloudinary.com/rohing/image/upload/v1666251547/androcare/success-stories/WhatsApp_Image_2022-10-12_at_5.17.17_PM_2.jpg",
				"https://res.cloudinary.com/rohing/image/upload/v1666251546/androcare/success-stories/WhatsApp_Image_2022-10-12_at_5.16.24_PM_1.jpg",
				"https://res.cloudinary.com/rohing/image/upload/v1666251470/androcare/success-stories/WhatsApp_Image_2022-10-15_at_1.54.55_PM.jpg",
			];
			
			return view('pages.success-stories', ['images' => $stories]);
		}
		
		public function whyUs() {
			return view('pages.why-us');
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

		public function team()
		{
			$team = Team::latest()->get();
			return view('pages.team', ['team' => $team]);
		}

		public function teamDetails(Team $team)
		{
			return view('pages.team-details', ['member' => $team]);
		}
}
