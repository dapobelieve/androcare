<?php

namespace App\Http\Traits;

use Illuminate\Support\Str;

trait UsesUUID
{
	protected static function bootUsesUUID() {
		static::creating(function ($model) {
			if (!$model->getKey()) {
				$model->{$model->getKeyName()} = (string) Str::uuid();
			}
		});
	}


	public function getIncrementing()
	{
		return false;
	}

	public function getKeyType()
	{
		return 'string';
	}

	public function mainImage()
	{
		return $this->images->first()['url']; // if image is not available, return a default link from site config
	}
}