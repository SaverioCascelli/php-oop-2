<?php
class product
{
    public $id;
    public $name;
    public $brand;
    public $price;
    public $is_avaiable = false;
    public $img_src;

    public function __construct($_id, $_name, $_brand, $_price, $img_src = null)
    {
    }
}
