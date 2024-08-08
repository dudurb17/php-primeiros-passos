<?php $idade = 21;
$name = 'Eduardo';

echo "Você só pode entrar se tiver mais do que 18 anos" . PHP_EOL;
if ($idade >= 18 && $name == 'Eduardo') {
  echo "Você tem mais de 18 anos. Pode entrar";
}