<?php 

class Categories extends Product{
  public $categoryName;
  public $brand;
  public $type;

  public function __construct(string $_name, float $_price, bool $_disposability, string $_categoryName, string $_brand, Type $_type){
    parent::__construct($_name, $_price, $_disposability, $_type);
    
    $this->categoryName = $_categoryName;
    $this->brand = $_brand;
    // imposto il tipo di oggetto se cane gatto ecc..
    $this->type = $_type;
  }

  //? get

  public function getFullInfo(){
    
    
  }
}
?>
