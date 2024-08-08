<?php

$cont = 1;

while ($cont <= 15) {
  echo "#$cont" . PHP_EOL;
  $cont++;
}

//for 

for ($i = 0; $i <= 15; $i++) {

  if ($i === 13) {
    continue;
  }
  echo "#$i" . PHP_EOL;

}

//break e continue