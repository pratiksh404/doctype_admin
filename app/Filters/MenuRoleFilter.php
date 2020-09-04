<?php

namespace App\Filters;

use Illuminate\Support\Facades\Auth;
use JeroenNoten\LaravelAdminLte\Menu\Filters\FilterInterface;

class MenuRoleFilter implements FilterInterface
{
    public function transform($item)
    {
        if (isset($item['role']) && Auth::user()->hasRole($item['role'])) {
            return $item;
        } elseif (!isset($item['role'])) {
            return $item;
        } else {
            return false;
        }
    }
}
