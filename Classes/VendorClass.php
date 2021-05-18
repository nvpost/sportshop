<?php


class VendorClass
{
    public $cat;
    public $needParent;
    public $needChild;
    public $vendors;

    public function __construct($cat=0, $needParent = false, $needChild=true)
    {
        $this->cat = $cat;

    }

    public function setNeedChild($needChild)
    {
        $this->needChild = $needChild;
    }

    public function setNeedParent($needParent)
    {
        $this->needParent = $needParent;
    }

    public function get(){
        $sql = "SELECT DISTINCT vendor as label FROM products";
        return pdSql($sql);
    }

}