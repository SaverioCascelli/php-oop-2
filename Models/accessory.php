
<?php
class Accessory extends Product
{

    public $material;
    public $size;

    public function __construct($_id, $_name, $_brand, $_price, $_genre, $_material, $_size, $_img_src = null)
    {

        $this->material = $_material;
        $this->size = $_size;

        parent::__construct($_id, $_name, $_brand, $_price, $_genre, $_img_src = null);
    }
    public function getfeature()
    {
        $arr = [];
        $arr['material'] = $this->material;
        $arr['size'] = $this->size;
        return $arr;
    }
}
?>