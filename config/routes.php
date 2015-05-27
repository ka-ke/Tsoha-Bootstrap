<?php

  $routes->get('/', function() {
    HelloWorldController::index();
  });
  
  $routes->get('/registeration', function(){
      registerationController::index();
  });
  
  $routes->post('/registeration', function(){
      registerationController::saveRegisteration();
  });
  
  $routes->get('/collection', function(){
      collectionController::index();
  });
  
    $routes->get('/search', function(){
      searchdbController::index();
  });
  
    $routes->get('/decks', function(){
      decksController::index();
  });
  
    $routes->get('/value', function(){
      valuechartController::index();
  });
  
  $routes->get('/hiekkalaatikko', function() {
    HelloWorldController::sandbox();
  });
