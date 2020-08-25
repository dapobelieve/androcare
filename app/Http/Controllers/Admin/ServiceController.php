<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Service;

class ServiceController extends Controller
{
    public function post(Request $request) {

    	// validate inputs

			//persist data
			$service = Service::firstOrCreate([
				'name' => $request->title,
				'body' => $request->body,
				'richBody' => $request->richBody,
				'slug' => Str::slug($request->title)
			]);

			$image = new Image;

			if($request->has('imageData')) {
				$image->public_id = $request->imageData['public_id'];
				$image->url = $request->imageData['secure_url'];
				$service->images()->save($image);
			}

    	//if imageData exists, save it

    	return response()->json([
    		'data' => $service
			]);
		}
}
