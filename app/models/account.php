<?php

class Account extends BaseModel{
  // Attribuutit
  public $id, $username, $password;
  // Konstruktori
  public function construct($attributes){
    parent::construct($attributes);
  }
  
    public static function all() {
        $query = DB::connection()->prepare('SELECT * FROM Account');
        $query->execute();
        $rows = $query->fetchAll();
        $accounts = array();

        foreach ($rows as $row) {
            $accounts[] = new Account(array(
                'ID' => $row['ID'],
                'username' => $row['username'],
                'password' => $row['password']));
        }
        return $accounts;
    } 
    
    public static function find($id) {
        $query = DB::connection()->prepare('SELECT * FROM Account WHERE ID = :ID LIMIT 1');
        $query->execute(array('ID' => $id));
        $row = $query->fetch();

        if ($row) {
            $Account = new Account(array(
                'ID' => $row['ID'],
                'username' => $row['username'],
                'password' => $row['password']));
            return $jasen;
        }
        return NULL;
    }
    
public function save() {
        $query = DB::connection()->prepare('INSERT INTO Account (username, password) VALUES (:username, :password) RETURNING ID');

        $query->execute(array(
                'ID' => $row['ID'],
                'username' => $row['username'],
                'password' => $row['password']));
        $row = $query->fetch();
        Kint::trace();
        Kint::dump($row);
        $this->id = $row['ID'];
    }    

public static function login($username, $password) {
        $query = DB::connection()->prepare('SELECT * FROM Account WHERE username = :username AND pasword = :password LIMIT 1');
        $query->execute(array('username' => $username, 'password' => $password));
        $row = $query->fetch();

        if ($row) {
            $account = new Account(array(
                'ID' => $row['ID'],
                'username' => $row['username'],
                'password' => $row['password']));
            return $account;
        }
        return NULL;
    }
}