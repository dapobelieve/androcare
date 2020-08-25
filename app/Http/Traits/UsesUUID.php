<?php

namespace App\Http\Traits;

use Illuminate\Support\Str;

trait UsesUUID
{
	protected static function bootUsesUUID() {
		static::creating(function ($model) {
			if (!$model->getKey()) {
				$model->{$model->getKeyNam()} = (string) Str::uuid();
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
}