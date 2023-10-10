<?php
namespace App\Service;

class BaseService
{

    protected Object|Array $model;

    protected function fetch(): object|array{

        if(!$model=$this->model){

            return [];

        }

        return $model;
    }

    public static function get(): Object|Array
    {
        return app(get_called_class())->fetch();
    }
}
