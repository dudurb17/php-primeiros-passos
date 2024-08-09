<?php
$conta1 = [
  'titular' => 'Eduardo',
  'saldo' => 100,
];

$conta2 = [
  'titular' => 'Alan',
  'saldo' => 1000,
];

$conta3 = [
  'titular' => 'Marema',
  'saldo' => 10000,
];


$contasCorrente = [$conta1, $conta2, $conta3];

for ($i = 0; $i < count($contasCorrente); $i++) {
  echo $contasCorrente[$i]["titular"] . PHP_EOL;
}