<aside class="aside2  sombra">
  <div class="card border-light">
    <h5 class="card-header">Ejercicio 2</h5>
    <div class="card-body">

      <h5 class="card-title">Unidades de Temperatura</h5>
      <p class="card-text">Elabore una aplicación que permita convertir unidades de temperatura.</p>

      <form action=" <?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
        <input type="hidden" name="limpiar" value="true">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal1">
          Mostrar
        </button> 
        <button type="submit" class="btn btn-primary" >Limpiar</button>
      </form>    

      <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel2" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header ">
              <h5 class="modal-title" id="exampleModalLabel2">Ejercicio 2</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>

            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
              <div class="modal-body" id="ejercicio1">
                
                <div class="form-group">
                  <label for="exampleInputEmail2">Ingrese una temperatura</label>
                  <input type="text" name="result" class="form-control" id="exampleInputEmail2" aria-describedby="emailHelp" value="0" style="font-size: 30px;">                  
                </div>   
                <div class="custom-control custom-radio">
                  <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
                  <label class="custom-control-label" for="customRadio1">De Celsius a Kelvin</label>
                </div>
                <div class="custom-control custom-radio">
                  <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                  <label class="custom-control-label" for="customRadio2">De Kelvin a Celsius</label>
                </div>
                <button type="submit" class="btn btn-primary">Calcular</button>
              </div>
            </form> 

            <div class="modal-footer ">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>   
</aside>