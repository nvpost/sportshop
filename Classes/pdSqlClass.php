<?php


class pdSqlClass
{
    public $db;
    public $sql;

    public function __construct($sql)
    {
        $this->sql = $sql;
    }

    public function sqlRes(){
        return "ff";
    }

}