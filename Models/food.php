<?php 
class Food extends Product{

    public $weight;
    public $taste;
    public $ingredients;
    
    public function __construct($_id, $_name, $_brand, $_price, $_genre, $_weight,$_ingredients,$_taste, $_img_src = null)
    {
        
        $this->weight = $_weight;
        $this->taste = $_taste;
        $this->ingredients = $ingredients;

        parent::__construct($_id, $_name, $_brand, $_price, $_genre, $_img_src = null)
    }
}
?>