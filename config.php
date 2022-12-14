<?php

/*
 * config.php  - Este arquivo contem informações referente a: Conexão com banco de dados e URL Pádrão
 */

require 'environment.php';
$config = array();
if (ENVIRONMENT == 'development') {
  //Raiz
  define("BASE_URL", "http://localhost/virtualhost/cavanis");
  define("BASE_URL_PAINEL", "http://localhost/painel_cavanis");
  //Nome do banco
  $config['dbname'] = 'bd_cavanis';
  //host
  $config['host'] = 'localhost';
  //usuario
  $config['dbuser'] = 'root';
  //senha
  $config['dbpass'] = '';
} else {
  //Raiz
  define("BASE_URL", "http://localhost/virtualhost/cavanis");
  define("BASE_URL_PAINEL", "http://localhost/painel_cavanis");
  //Nome do banco
  $config['dbname'] = 'bd_cavanis';
  //host
  $config['host'] = 'localhost';
  //usuario
  $config['dbuser'] = 'root';
  //senha
  $config['dbpass'] = '';
}
?>
