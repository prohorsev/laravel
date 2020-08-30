<?php

namespace App\Http\Controllers;

use App\Jobs\NewsParsing;
use App\Services\ParserService;
use Illuminate\Http\Request;

class ParserController extends Controller
{
	protected $urls = [
		'https://news.yandex.ru/music.rss',
		'https://news.yandex.ru/auto.rss',
		'https://news.yandex.ru/army.rss',
		'https://news.yandex.ru/games.rss',
		'https://news.yandex.ru/movies.rss',
		'https://news.yandex.ru/cosmos.rss',
		'https://news.yandex.ru/fire.rss',
		'https://news.yandex.ru/health.rss'
	];

	public function index()
	{
		foreach ($this->urls as $url) {
			NewsParsing::dispatch(new ParserService($url));
		}

		return "Success";
	}
}
