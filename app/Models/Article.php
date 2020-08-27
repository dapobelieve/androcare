<?php

namespace App\Models;

use App\Http\Traits\UsesUUID;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
	use UsesUUID;
	protected $guarded = [];
	protected $with = ['images'];

	public function images()
	{
		return $this->morphMany(Image::class, 'imageable');
	}
}
