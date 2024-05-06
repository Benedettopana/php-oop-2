<?php

trait Recensioni{
  public $nRecensioni;
  public $star;

  public function getRecensioni(){
    return "$this->nRecensioni, $this->star";
  }
}

?>