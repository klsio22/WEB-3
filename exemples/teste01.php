<?php

function array_key_exists_custom($key, $array)
{
  foreach ($array as $array_key => $value) {
    if ($array_key === $key) {
      return true;
    }
  }
  return false;
}


$idade = array("joao" => 30, "maria" => 28, "ana" => 90);


if (array_key_exists_custom("maria", $idade)) {
  echo "A chave maria existe no array";
} else {
  echo "A chave maria não existe";
}
