<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function index()
	{
        $params = [
            'text' => 'Тут какой-то текст',
            'url1' => route('admin.test1'),
            'url2' => route('admin.test2'),
        ];
        return view('admin.index', $params);
    }
    
    public function test1()
    {
        $route = '/admin';
        return <<<php
        <h1>Test1</h1>
        <p style="color:green">
        <a href"{$route}">Admin</a><br>
        </p>
php;
    }

    public function test2()
    {
        $route = route('admin');
        return <<<php
        <h1>Test2</h1>
        <p style="color:green">
        <a href"{$route}">Admin</a><br>
        </p>
php;
    }

}