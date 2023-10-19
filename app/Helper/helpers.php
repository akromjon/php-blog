<?php

use Illuminate\Support\Facades\Cache;

if (!function_exists('isActive')) {
    function isActive(string $routeName, string $slug = ''): string
    {
        if (request()->routeIs($routeName) && $slug == '') {
            return 'active';
        }

        if (request()->routeIs($routeName) && $slug == collect(request()->segments())->last()) {
            return 'active';
        }

        return '';
    }
}

if (!function_exists('DoNotShow')) {
    function DoNotShow(array $routeNames): bool
    {
        foreach ($routeNames as $routeName) {
            if (request()->routeIs($routeName)) {
                return false;
            }
        }

        return true;
    }
}

if (!function_exists('IsActiveByParam')) {
    function IsActiveByParam(string $param): string
    {
        logger(request()->query('tag'));
        if (request()->query('tag') == $param) {
            return 'active';
        }
        return '';
    }
}

if (!function_exists('getCache')) {
    function getCache(string $cacheName, $value)
    {
        return Cache::rememberForever($cacheName, function () use ($value) {
            return $value;
        });
    }
}
