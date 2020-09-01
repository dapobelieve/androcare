<?php

namespace App\Http\Views\Composers;
use App\Models\Article;
use Illuminate\View\View;

class ArticleComposer
{
	public $articles = [];

	public function __construct()
	{
		$this->articles = Article::latest()->get();
	}

	public function compose(View $view)
	{
		$view->with('articles', $this->articles);
	}
}

