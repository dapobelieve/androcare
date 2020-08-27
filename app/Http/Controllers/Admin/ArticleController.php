<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Traits\UsesUUID;
use App\Models\Image;
use App\Models\Service;
use Illuminate\Http\Request;
use App\Models\Article;
use Illuminate\Support\Str;
use App\Http\Requests\ArticleRequest;

class ArticleController extends Controller
{
	use UsesUUID;

	public function post(ArticleRequest $request) {
		//persist data
		$article = Article::firstOrCreate([
			'title' => $request->title,
			'body' => $request->body,
			'richBody' => $request->richBody,
			'slug' => Str::slug($request->title)
		]);

		//if imageData exists, save it
		if($request->has('imageData')) {
			$image = new Image;
			$image->public_id = $request->imageData['public_id'];
			$image->url = $request->imageData['secure_url'];
			$article->images()->save($image);
		}
		return response()->json([
			'data' => $article
		], 201);
	}

	public function get()
	{
		$articles = Article::all();
		return response()->json([
			'data' => $articles,
		], 200);
	}

	public function edit(Request $request, Article $article) {
		if(!$article) {
			return response()->json([
				'message' => "Record not found"
			], 400);
		}

		return response()->json([
			'data' => $article
		]);
	}

	public function update(Request $request, Article $article) {
		if(!$article) {
			return response()->json([
				'message' => "Record not found"
			], 400);
		}

		if($request->has('imageData')) {
			$article->images()->update([
				'public_id' => $request->imageData['public_id'],
				'url' => $request->imageData['secure_url']
			]);
		}

		$article->title = $request->title;
		$article->body = $request->body;
		$article->richBody = $request->richBody;
		$article->slug = Str::slug($request->title);

		$article->save();

		return response()->json([
			'data' => $article,
			'message' => 'Update successful'
		], 204);
	}

	public function delete(Article $article)
	{
		if(!$article) {
			return response()->json([
				'message' => "Record not found"
			], 400);
		}


	}
}
