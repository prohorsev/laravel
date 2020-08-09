<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsCategoriesController extends Controller
{
    public function index()
    {
        $categories =  $this->getCategories();
        return view('news.index', [
           'categories' => $categories
       ]);
        }

    public function showNews(int $id)
    {
        $news = $this->getNews();
        return view('news.news', [
            'news' => $news,
            'id' => $id
        ]);
    }

    public function showItem(int $id)
    {
        $news = $this->getNews();
        return view('news.item', [
            'news' => $news,
            'id' => $id
        ]);
    }
}
