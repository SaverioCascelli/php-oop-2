<?php
class product
{
    public $id;
    public $name;
    public $brand;
    public $price;
    private $is_avaiable = false;
    public $img_src;

    /**
     * @var int id
     * @var string $name
     * @var string brand
     * @var float price
     * @var string img_src placeholder if null
     */
    public function __construct($_id, $_name, $_brand, $_price, $_img_src = null)
    {
        $this->id = $_id;
        $this->name = $_name;
        $this->brand = $_brand;
        $this->price = $_price;
        $this->img_src = $_img_src;
    }

    public function toggleAvaiable()
    {
        $this->is_avaiable = !($this->is_avaiable);
    }
}
