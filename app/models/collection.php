<?php

class Collection extends BaseModel{
  // Attribuutit
  public $id, $collector;
  // Konstruktori
  public function __construct($attributes){
    parent::__construct($attributes);
  }
}

