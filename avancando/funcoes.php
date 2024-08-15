<?php

function sacar($conta, $saque)
{
  if (500 > $conta['saldo']) {
    exibeMensagem('Você não pode sacar');
  } else {
    $conta['saldo'] -= 500;
  }
  return $conta;
}

function depositar($conta, float $valorAdepositar): array
{
  if ($valorAdepositar > 0) {
    $conta['saldo'] += $valorAdepositar;

  } else {
    exibeMensagem("Depositos precisam ser positivos");
  }
  return $conta;
}

function exibeMensagem($mensagem)
{
  echo $mensagem . PHP_EOL;
}

function titularComLetraMaiusculas(array &$conta)
{
  $conta['titular'] = mb_strtoupper($conta['titular']);
 }