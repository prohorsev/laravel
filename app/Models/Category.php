<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Category extends Model
{
    protected $table = "categories";


    public function getAll(): array
	{
      return DB::select("select id, category from categories");
	}

	public function getById(int $id)
	{
       return DB::selectOne("select id, category from categories where id = :id",
		['id' => $id]);
	}
}
