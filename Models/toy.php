

<?php
class Toy extends Product
{

    public $feature;
    public $size;

    public function __construct($_id, $_name, $_brand, $_price, $_genre, $_feature, $_size, $_img_src = null)
    {

        $this->feature = $_feature;
        $this->size = $_size;

        parent::__construct($_id, $_name, $_brand, $_price, $_genre, $_img_src = null);
    }
}
?>