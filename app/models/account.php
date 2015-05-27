<?php

class Account extends BaseModel{
  // Attribuutit
  public $id, $username, $password;
  // Konstruktori
  public function __construct($attributes){
    parent::__construct($attributes);
  }
}

