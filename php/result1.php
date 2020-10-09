<?php 

  $numero = $invertido = 0;
  $error = ""; 

  if ($_SERVER["REQUEST_METHOD"] == "POST") { 
    if (empty($_POST["result"])) {
      $error = "";
      $numero = $invertido = 0;
    } else {
      $numero = $_POST["result"];    
      $invertido = invertir($numero);
      if (strlen($numero) <= 2 or strlen($numero) > 3) {
        $numero = 0;
        $invertido = 0;
        $error = "Error: Por favor ingrese un numero de tres digitos.";
      } 
    }
  } 

  function invertir($num){    
    return strrev($num);
  }  

?>

<aside class="resultado1 sombra">
  <div class="card border-light" style="height: 100%;">
    <h5 class="card-header">Resultado 1</h5>
    <div class="card-body">
      <h4 class="card-title">Num Ingresado: <?php echo($numero) ?></h4>
      <h4 class="card-title">Num Invertido: <?php echo($invertido) ?></h4>      
      <h5> <?php echo($error) ?> </h5>      
    </div>    
  </div>   
</aside>