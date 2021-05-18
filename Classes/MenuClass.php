<?php


class MenuClass
{
    function getMenu($p_id=0){
        global $menuItemForRemove;
        global $productCounter;
        $sql = "SELECT * FROM category WHERE parent_id =".$p_id;
        $menu = pdSql($sql);

        foreach ($menu as $k => $item){
            $child = $this->getMenu($item['cat_id']);
            if($child){
                $menu[$k]['child'] = $child;
            }

        }
        return $menu;
    }
}