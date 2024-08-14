<?php

function exibeMensagem($mensagem)
{
  echo $mensagem . PHP_EOL;

}


$contasCorrentes = [
  '123.543.876-45' => [
    'titular' => 'Maria',
    'saldo' => 1000,
  ],
  '123.343.343-23' => [
    'titular' => 'Eduardo',
    'saldo' => 100,
  ],
  '343.324.343-00' => [
    'titular' => 'Bruna',
    'saldo' => 10000,
  ],
];

$contasCorrentes['123.543.876-45']['saldo'] -= 500;

foreach ($contasCorrentes as $key => $conta) {
  exibeMensagem($key . ' ' . $conta['titular'] . 'salfdo: ' . $conta['saldo']);
}