<?php
namespace App\Service;

use App\Models\Tag;
use Illuminate\Support\Facades\DB;
class TagService extends BaseService
{
    public function __construct()
    {
        $this->model = Tag::select('id','title','slug')->get();
    }
}
