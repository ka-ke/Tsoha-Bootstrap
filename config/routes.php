<?php

  $routes->get('/', function() {
    HelloWorldController::index();
  });
  
  $routes->get('/registeration', function(){
      registerationController::index();
  });

  $routes->get('/hiekkalaatikko', function() {
    HelloWorldController::sandbox();
  });
