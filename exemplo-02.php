<?php

$json = '[{"Nome":"Joao","Idade":30},{"Nome":"Marcio","Idade":25}]';

$data = json_decode($json, true); // Já o json_decode vai ser utilizado para pegar um json e transforma-lo em array. a operação contraria do que foi feito anterriormente. 

var_dump($data); 

?>