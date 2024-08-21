<?php
$v= $_POST['valor1'];
$par = true;
function gerarCorAleatoria() {
    return sprintf('#%06X', mt_rand(0, 0xFFFFFF));
}


for($cont=1; $cont<$v; $cont++){

    $corAleatoria = gerarCorAleatoria();
 if($par){
    echo('<p style="background-color: ' . $corAleatoria . '">Valor atual ' . $cont . '</p>');
}
else{
    echo('<p style="background-color: ' . $corAleatoria . '">Valor atual ' . $cont . '</p>');
}
$par = !$par; 
}
?>


