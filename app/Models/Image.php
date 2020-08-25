<?php

namespace App\Models;

use App\Http\Traits\UsesUUID;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use UsesUUID;

    protected $guarded = [];

		public function imageable()
		{
			return $this->morphTo();
		}
}
