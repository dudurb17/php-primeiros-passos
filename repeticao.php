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

//exercise
//odd numbers
for ($i = 0; $i <= 10; $i++) {
  if ($i % 2 != 0) {
    echo $i . PHP_EOL;
  }
}

//multiplication table 

$num = 5;
$cont = 0;
while ($cont <= 10) {
  echo $num * $cont . PHP_EOL;
  $cont++;
}