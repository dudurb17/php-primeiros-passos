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

foreach ($contasCorrente as $key => $conta) {
  echo $conta["titular"] . PHP_EOL;
}