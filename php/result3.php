<?php 
  $estiloEntrada = "";
  $colorEntrada  = "";
  $estiloSalida  = "";
  $colorSalida   = "";

  if ($_SERVER["REQUEST_METHOD"] == "POST") {  

    if (empty($_POST["color"]) and empty($_POST["estilo"])) {
      $estiloSalida = "";
      $colorSalida  = "";
           
    } else {
      $estiloEntrada = $_POST["estilo"];
      $colorEntrada  = $_POST["color"];

      switch ($colorEntrada) {
        case 'Azul':
          $colorSalida = "color: blue;";
          break;        
        case 'Verde':
          $colorSalida = "color: green;";
          break;
      }

      switch ($estiloEntrada) {
        case 'Negrita':
          $estiloSalida = "font-weight: bold;";
          break;
        case 'Cursiva':
          $estiloSalida = "font-style: italic;";
          break;
        case "Normal":
          $estiloSalida = "font-style: normal;";
      }
    }
  } 

?>

<aside class="resultado3 sombra">
  <div class="card border-light" style="height: 100%;">
    <h5 class="card-header">Resultado 3</h5>
    <div class="card-body">      
      <h4 class="card-title" style="<?php echo($estiloSalida); echo($colorSalida) ?>" >
        <?php echo("BOTONES DE OPCI&Oacute;N") ?> 
      </h4>
      <h4>Color: <?php echo($colorEntrada) ?></h4>
      <h4>Estilo: <?php echo($estiloEntrada) ?></h4>
    </div>    
  </div>   
</aside>
