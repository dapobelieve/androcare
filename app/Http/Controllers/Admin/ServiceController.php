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

    	//if imageData exists, save it
			if($request->has('imageData')) {
				$image = new Image;
				$image->public_id = $request->imageData['public_id'];
				$image->url = $request->imageData['secure_url'];
				$service->images()->save($image);
			}
    	return response()->json([
    		'data' => $service
			], 201);
		}

		public function get()
		{
			$services = Service::all();
			return response()->json([
				'data' => $services,
			], 200);
		}

		public function edit(Request $request, $slug) {
    	$service = Service::where('id', $slug)->first();

    	if(!$service) {
    		return response()->json([
    			'message' => "Record not found"
				], 400);
			}

    	return response()->json([
    		'data' => $service
			]);
		}

		public function update(Request $request, $id) {
    	$service = Service::where('id', $id)->first();

			if(!$service) {
				return response()->json([
					'message' => "Record not found"
				], 400);
			}

			if($request->has('imageData')) {
				$service->images()->update([
					'public_id' => $request->imageData['public_id'],
					'url' => $request->imageData['secure_url']
				]);
			}

			$service->name = $request->name;
			$service->body = $request->body;
			$service->richBody = $request->richBody;
			$service->slug = Str::slug($request->name);

			$service->save();

    	return response()->json([
    		'data' => $service,
				'message' => 'Update successful'
			], 204);
		}

		public function delete(Service $service)
		{
			if(!$service) {
				return response()->json([
					'message' => "Record not found"
				], 400);
			}

			return response()->json([
				'data' => $service
			]);
		}
}
