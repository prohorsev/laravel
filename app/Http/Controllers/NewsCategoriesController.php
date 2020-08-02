<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsCategoriesController extends Controller
{
    public function index()
    {
        $categories =  $this->getCategories();
        $catPage = '';
        foreach ($categories as $val) {
            $route = route('newscategories.shownews', ['id' => $val['id']]);
            $catPage .= '<a href="' . $route . '">' . $val['category'] . '</a></br>';
        }
        return 'Это страница категорий новостей </br>' . $catPage;
    }

    public function showNews(int $id)
    {
        $news = $this->getNews();
        $newsPage = '';
        foreach ($news as $val) {
            if ($val['category_id'] == $id) {
                $route = route('newscategories.showitem', ['id' => $val['id']]);
                $newsPage .= '<a href="' . $route . '">' . $val['title'] . '</a>' . '</br>';
            }
        }
        return 'Это страница новостей категории ' . $id . '</br>' . $newsPage;
    }

    public function showItem(int $id)
    {
        $news = $this->getNews();
        $itemPage = '';
        foreach ($news as $val) {
            if ($val['id'] == $id) {
                $itemPage = '<h4>' . $val['title'] . '</h4>' . '<p>' . $val['text'] . '</p>';
            }
        }
        return $itemPage;
    }
}
