<?php 

class Type{
  public $type;

  public function __construct(string $_type){
    $this->type = $_type;
  }

  //? get
  public function getType(){
    return $this->type;
  }
}
?>