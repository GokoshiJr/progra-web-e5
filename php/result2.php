<?php 
  $gradoEntrada  = "";
  $unidadEntrada = "";
  $gradoSalida   = "";
  $unidadSalida  = "";

  if ($_SERVER["REQUEST_METHOD"] == "POST") {  

    if (empty($_POST["grado"]) and empty($_POST["unidad"])) {
      $gradoSalida  = "";
      $unidadSalida = "";           
    } else {
      $gradoEntrada  = $_POST["grado"];
      $unidadEntrada = $_POST["unidad"];
      $gradoSalida   = 0;
      $unidadSalida  = "";
      
      switch ($unidadEntrada) {
        case '0':
          $gradoSalida   = $gradoEntrada + 273.15;
          $unidadEntrada = " C";
          $unidadSalida  = " K";
          break;
        case '1':
          $gradoSalida   = toCelsius($gradoEntrada, "K");
          $unidadEntrada = " K";
          $unidadSalida  = " C";
          break;
        case '2':
          $gradoSalida   = ($gradoEntrada * (9 / 5)) + 32;
          $unidadEntrada = " C";
          $unidadSalida  = " F";
          break;
        case '3':
          $gradoSalida   = toCelsius($gradoEntrada, "F");
          $unidadEntrada = " F";
          $unidadSalida  = " C";
          break;
        case '4':
          $gradoSalida   = toCelsius($gradoEntrada, "F") + 273.15;
          $unidadEntrada = " F";
          $unidadSalida  = " K";
          break;
        case '5':
          $gradoSalida   = (toCelsius($gradoEntrada, "K") * (9 / 5)) + 32;
          $unidadEntrada = " K";
          $unidadSalida  = " F";
          break;
        }
    }
  } 

  function toCelsius($grade, $unit) {
    $result = 0;
    switch ($unit) {
      case 'K':
        $result = $grade - 273.15;
        break;
      case 'F':
        $result = ($grade - 32) * (5 / 9);
        break;
    }
    return $result;
  }
?>

<aside class="resultado2 sombra">
  <div class="card border-light" style="height: 100%;">
    <h5 class="card-header">Resultado 2</h5>
    <div class="card-body">
      <h4 class="card-title">Temperatura Ingresada: <?php echo(round($gradoEntrada, 2) . $unidadEntrada) ?></h4>
      <h4 class="card-title">Conversi&oacute;n: <?php echo(round($gradoSalida, 2) . $unidadSalida) ?></h4>
    </div>    
  </div>   
</aside>
