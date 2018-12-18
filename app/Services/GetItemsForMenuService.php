<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 18.12.2018
 * Time: 22:54
 */

namespace App\Services;


use App\Menu;

final class GetItemsForMenuService
{
    public function getMenus(){
        return Menu::all();
    }
}