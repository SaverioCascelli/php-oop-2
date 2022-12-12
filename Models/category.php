<?php
class Category
{
    public $name;
    public $expire;

    public function __construct($_name, $_expire)
    {
        $this->name = $_name;
        $this->expire = $_expire;
    }
}
