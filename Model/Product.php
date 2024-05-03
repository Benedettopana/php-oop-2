<?php 

class Product{
  private $name;
  protected $price;
  public $disposability;
  
  //? Costruttore
  public function __construct(string $_name, float $_price, bool $_disposability){

    $this->setName($_name);
    $this->setPrice($_price);
    $this->setDisposability($_disposability);
    

  }
  //? /Costruttore

  //? Setter
  //! Name
  public function setName($_name){
    $this->name = $_name;
  }
  //! Prezzo
  public function setPrice($_price){
    $this->price = $_price;
  }
  //! Disponibilità
  public function setDisposability($_disposability){
    $this->disposability = $_disposability;
  }
  //? /Setter

  //? Getter
  //! Name
  public function getName(){
    return $this->name;
  }
  //! Prezzo
  public function getPrice(){
    return $this->price;
  }
  //! Disponibilità
  public function getDisposability(){
    if($this->disposability){
      echo 'Disponibile! ';
    }else{
      echo "Non Disponibile. ";
    }
    
  }

  //! Tutte le informazioni
  public function getProductInfo(){
    echo "$this->name $this->price " . $this->getDisposability();
  }
  //? /Getter
}

?>