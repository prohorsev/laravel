<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected  $categories = [
		[
			'id' => 1,
			'category' => 'Категория 1'
 		],
		[
			'id' => 2,
			'category' => 'Категория 2'
		],
		[
			'id' => 3,
			'category' => 'Категория 3'
        ],
        [
			'id' => 4,
			'category' => 'Категория 4'
        ],
        [
			'id' => 5,
			'category' => 'Категория 5'
        ],
	];
    
    protected  $news = [
		[
			'id' => 1,
			'title' => 'Новость номер 1',
            'text'  => 'Описание новости номер 1',
            'category_id' => 1
 		],
		[
			'id' => 2,
			'title' => 'Новость номер 2',
            'text'  => 'Описание новости номер 2',
            'category_id' => 1
		],
		[
			'id' => 3,
			'title' => 'Новость номер 3',
            'text'  => 'Описание новости номер 3',
            'category_id' => 1
        ],
        [
			'id' => 4,
			'title' => 'Новость номер 4',
            'text'  => 'Описание новости номер 4',
            'category_id' => 1
        ],
        [
			'id' => 5,
			'title' => 'Новость номер 5',
            'text'  => 'Описание новости номер 5',
            'category_id' => 2
        ],
        [
			'id' => 6,
			'title' => 'Новость номер 6',
            'text'  => 'Описание новости номер 6',
            'category_id' => 2
        ],
        [
			'id' => 7,
			'title' => 'Новость номер 7',
            'text'  => 'Описание новости номер 7',
            'category_id' => 2
        ],
        [
			'id' => 8,
			'title' => 'Новость номер 8',
            'text'  => 'Описание новости номер 8',
            'category_id' => 2
        ],
        [
			'id' => 9,
			'title' => 'Новость номер 9',
            'text'  => 'Описание новости номер 9',
            'category_id' => 3
        ],
        [
			'id' => 10,
			'title' => 'Новость номер 10',
            'text'  => 'Описание новости номер 10',
            'category_id' => 3
        ],
        [
			'id' => 11,
			'title' => 'Новость номер 11',
            'text'  => 'Описание новости номер 11',
            'category_id' => 3
        ],
        [
			'id' => 12,
			'title' => 'Новость номер 12',
            'text'  => 'Описание новости номер 12',
            'category_id' => 3
        ],
        [
			'id' => 13,
			'title' => 'Новость номер 13',
            'text'  => 'Описание новости номер 13',
            'category_id' => 4
        ],
        [
			'id' => 14,
			'title' => 'Новость номер 14',
            'text'  => 'Описание новости номер 14',
            'category_id' => 4
        ],
        [
			'id' => 15,
			'title' => 'Новость номер 15',
            'text'  => 'Описание новости номер 15',
            'category_id' => 4
        ],
        [
			'id' => 16,
			'title' => 'Новость номер 16',
            'text'  => 'Описание новости номер 16',
            'category_id' => 4
        ],
        [
			'id' => 17,
			'title' => 'Новость номер 17',
            'text'  => 'Описание новости номер 17',
            'category_id' => 5
        ],
        [
			'id' => 18,
			'title' => 'Новость номер 18',
            'text'  => 'Описание новости номер 18',
            'category_id' => 5
        ],
        [
			'id' => 19,
			'title' => 'Новость номер 19',
            'text'  => 'Описание новости номер 19',
            'category_id' => 5
        ],
        [
			'id' => 20,
			'title' => 'Новость номер 20',
            'text'  => 'Описание новости номер 20',
            'category_id' => 5
		],
    ];
    
    public function getCategories()
    {
        return $this->categories;
    }
    public function getNews()
    {
        return $this->news;
    }
}
