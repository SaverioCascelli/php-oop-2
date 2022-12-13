

<?php
class Toy extends Product
{

    public $feature;
    private $size;

    public function __construct($_id, $_name, $_brand, $_price, $_genre, $_feature, $_size, $_img_src = null)
    {

        $this->feature = $_feature;
        $this->size = $_size;

        parent::__construct($_id, $_name, $_brand, $_price, $_genre, $_img_src = null);
    }
    public function getfeature()
    {
        $arr = [];
        $arr['feature'] = $this->feature;
        $arr['size'] = $this->size;
        return $arr;
    }
}
?>