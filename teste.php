<?php
$v= $_POST['valor1'];
$par = array();
for($cont=1; $cont<$v; $cont++){
 if($par){
    echo('<p style="background-color: #red">Valor atual ' .$cont. '</p>'); //Numero Par
}
else{
    echo('<p style="background-color: #blue">Valor atual ' .$cont. '</p>'); //Numero Ímpar
}
$par = !$par; //Alterna entre par e ímpar
}

?>