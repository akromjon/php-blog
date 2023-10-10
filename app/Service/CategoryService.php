<?php
namespace App\Service;

use App\Models\Category;
use Illuminate\Support\Facades\DB;

class CategoryService extends BaseService
{
    public function __construct()
    {
        $this->model = DB::table('categories')->where('status',true)->select('id', 'slug', 'title')->get();
    }
}
