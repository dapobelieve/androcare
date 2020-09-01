<?php

namespace App\Models;

use App\Http\Traits\UsesUUID;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Article extends Model
{
	use UsesUUID;
	protected $guarded = [];
	protected $with = ['images'];

	public function formattedDate($day='day', $month='monthName', $year='year')
	{
		return [
			'day' => Carbon::parse($this->created_at)->$day,
			'month' => Carbon::parse($this->created_at)->$month,
			'year' => Carbon::parse($this->created_at)->$year
		];
	}
	public function images()
	{
		return $this->morphMany(Image::class, 'imageable');
	}

	public function getRouteKeyName()
	{
		return 'slug';
	}
}
