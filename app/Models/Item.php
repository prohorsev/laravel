<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Item extends Model
{
    protected $table = "news";

	public function getAll($idCat): array
	{
        return DB::table($this->table)->select('id', 'title', 'text', 'category_id')->where('category_id', '=', $idCat)->get()->toArray();
	}

	public function getById(int $id)
	{
		return DB::table($this->table)->find($id);
	}
}
