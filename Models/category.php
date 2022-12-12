<?php
class Category
{
    public $name;
    public $is_food;

    public function __construct($_name, $_is_food)
    {
        $this->name = $_name;
        $this->is_food = $_is_food;
    }
}
