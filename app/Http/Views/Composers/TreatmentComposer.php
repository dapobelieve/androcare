<?php

namespace App\Http\Views\Composers;
use App\Models\Service;
use Illuminate\View\View;

class TreatmentComposer {
	public $treats = [];


	public function __construct()
	{
		$this->treats = Service::latest()->select('name', 'slug')->get();
	}

	public function compose(View $view)
	{
		$view->with('serviceTitles', $this->treats);
	}
}
