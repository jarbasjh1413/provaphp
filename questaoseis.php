<?php
$NOME= $_POST["fnumber"];
if($NOME == 0){
  echo "Igual a zero";
}else if ($NOME > 0){
 echo "Valor positvo";
}else{
  echo "Valor negativo";
}
 
?>
