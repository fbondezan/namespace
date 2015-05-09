<?php

echo 'Exemplo de Namespace: <br>';


define('CLASS_DIR', 'src/');
//sempre que for buscar uma classe, busque TAMBEM na pasta 'src'
set_include_path(get_include_path().PATH_SEPARATOR.CLASS_DIR);
spl_autoload_register();

##### NÃO FUNCIONA ######

$x = new SON\Types\Conta();



##### FUNCIONA ######

//require_once ('SON/Types/Conta.php'); 
//$x = new Conta();