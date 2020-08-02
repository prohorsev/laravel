<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AddNewsController extends Controller
{
    public function index()
	{
		 return 'Название новости <input type="text"></br>Подробное описание новости <input type="text"></br>Краткое описание новости <input type="text"></br>';
	}

}