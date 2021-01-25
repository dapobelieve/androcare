<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Traits\UsesUUID;
use App\Models\Gallery;
use App\Models\Image;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
	public function get()
	{
		$galleries = Gallery::latest()->get();
		return response()->json([
			"data" => $galleries
		]);
	}

	public function post(Request $request)
	{
		foreach ($request->data as $item) {
			$gallery = Gallery::create([
				'caption' => $item['caption']
			]);

			$image = new Image;
			$image->public_id = $item['url']['public_id'];
			$image->url = $item['url']['secure_url'];
			$gallery->images()->save($image);
		}
		return response()->json([
			'message' => "success"
		], 201);
	}

	public function delete(Gallery $gallery)
	{
		if(!$gallery) {
			return response()->json([
				'message' => "Record not found"
			], 400);
		}

		$d = $gallery->delete();

		dd($gallery);

		return response()->json([
			'message' => "Image deleted successfully"
		], 204);
	}
}
