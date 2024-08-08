<?php $idade = 21;
$name = 'Eduardo';
$numeroDePessoas = 2;
echo "Você só pode entrar se tiver mais do que 18 anos" . PHP_EOL;
if ($idade >= 18 && $name == 'Eduardo') {
  echo "Você tem mais de 18 anos. Pode entrar";
} else {
  if ($idade >= 16 && $numeroDePessoas > 1) {
    echo 'Voce tem 16 ou mais e esta acompanhado, então pode entrar';
  } else
    echo "Você não pode entrar";
}