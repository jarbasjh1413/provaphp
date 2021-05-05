<?php
$NOME= $_POST["fstring"];
$nomea=strlen($NOME);
echo "String = ".$NOME;
$nomea=strlen($NOME);
echo ("<br> total de caracteres = ").$nomea;
echo ("<br> Imprime:");
for($i=1; $i<=$nomea; $i++){
  echo "$i";
}
 
?>
