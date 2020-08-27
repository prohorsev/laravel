<?php

namespace App\Http\Controllers;

use App\Services\ParserService;
use Illuminate\Http\Request;

class ParserController extends Controller
{
    public function index()
	{
		$objParser = new ParserService('https://news.yandex.ru/music.rss');
		dd($objParser->getData());
	}
}
