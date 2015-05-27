<?php

class registerationController extends BaseController {

    public static function index() {
        View::make('registeration.html');
    }

    public static function saveRegisteration(){
    $params = $_POST;
    $account = new Account(array(
      'username' => $params['username'],
      'password' => $params['password']
    ));

    $account->save();

    // Ohjataan käyttäjä lisäyksen jälkeen pelin esittelysivulle
    Redirect::to('/collection' . $account->id, array('message' => 'Tunnuksesi on rekisteröity!'));
  }
}
