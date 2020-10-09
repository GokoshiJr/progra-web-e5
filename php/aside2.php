<aside class="aside2 sombra">
  <div class="card border-light">
    <h5 class="card-header">Ejercicio 2</h5>
    <div class="card-body">
      <h5 class="card-title">Unidades de Temperatura</h5>
      <p class="card-text">Elabore una aplicación que permita convertir unidades de temperatura.</p>
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal2">
        Mostrar
      </button> 
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
                  <label for="exampleInputEmail2" style="font-size: 30px;">Ingrese una temperatura</label>
                  <input type="number" name="grado" class="form-control" id="exampleInputEmail2" aria-describedby="emailHelp" value="" style="font-size: 30px;">                  
                </div>
                <div class="container" style="font-size: 18px;">
                  <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="customRadioInline1" name="unidad" class="custom-control-input" value="0" checked>
                    <label class="custom-control-label" for="customRadioInline1">Celsius a Kelvin</label>
                  </div>
                  <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="customRadioInline2" name="unidad" class="custom-control-input" value="1">
                    <label class="custom-control-label" for="customRadioInline2">Kelvin a Celsius</label>
                  </div>
                  <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="customRadioInline3" name="unidad" class="custom-control-input" value="2">
                    <label class="custom-control-label" for="customRadioInline3">Celsius a Farenheit</label>
                  </div>
                  <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="customRadioInline4" name="unidad" class="custom-control-input" value="3">
                    <label class="custom-control-label" for="customRadioInline4">Farenheit a Celsius</label>
                  </div>
                  <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="customRadioInline5" name="unidad" class="custom-control-input" value="4">
                    <label class="custom-control-label" for="customRadioInline5">Farenheit a Kelvin</label>
                  </div>
                  <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="customRadioInline6" name="unidad" class="custom-control-input" value="5">
                    <label class="custom-control-label" for="customRadioInline6">Kelvin a Farenheit</label>
                  </div>
                </div>                
                <button type="submit" class="btn btn-primary">Convertir</button>
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