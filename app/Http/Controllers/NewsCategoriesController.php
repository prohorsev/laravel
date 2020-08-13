<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Item;

class NewsCategoriesController extends Controller
{
    public function index()
    {
        $categories =  new Category();
        return view('news.index', [
           'categories' => $categories
       ]);
        }

    public function showNews(int $id)
    {
        $news = (new Item())->getAll($id);
        return view('news.news', [
            'news' => $news,
            'id' => $id
        ]);
    }

    public function showItem(int $id)
    {
        $item = (new Item())->getById($id);
        return view('news.item', [
            'item' => $item,
            'id' => $id
        ]);
    }
}
