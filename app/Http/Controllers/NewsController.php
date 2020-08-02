<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
	{
		 $id = mt_rand(1, 1000);
		 $route = route('news.show', ['id' => $id]);
		 return "Это главная страница новостей! Открыть новость: <a href='".$route."'>".
			 $route."</a>";
	}

	public function show(int $id)
	{
		 return "Это новость с #ID= " . $id;
	}
}