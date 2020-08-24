<?php

namespace App\Http\Controllers\Account;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class IndexController extends Controller
{
    public function index()
	{
        $user = Auth::user();
        return view('account.index', ['user' => $user]);
	}

}