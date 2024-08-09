<?php $idadeList = [23, 5, 10, 23, 34, 129];
$idadeList[] = 10; 

for ($i = 0; $i < count($idadeList); $i++) {
  echo $idadeList[$i] . PHP_EOL;
}