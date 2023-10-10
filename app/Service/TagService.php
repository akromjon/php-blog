<?php
namespace App\Service;
use Illuminate\Support\Facades\DB;
class TagService extends BaseService
{
    public function __construct()
    {
        $this->model = DB::table('tags')->select('id','title','slug')->get();
    }
}
