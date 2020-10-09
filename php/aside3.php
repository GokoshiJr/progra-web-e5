<aside class="aside3 sombra">
  <div class="card border-light">
    <h5 class="card-header">Ejercicio 3</h5>
    <div class="card-body">
      <h5 class="card-title">Cambio de estilos</h5>
      <p class="card-text">Elabore una aplicación que permita modificar las propiedades de una etiqueta
        “BOTONES DE OPCIÓN” seleccionando el tipo de letra y color de un conjunto de
        opciones.</p>
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal3">
        Mostrar
      </button> 
      <div class="modal fade" id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel3" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header ">
              <h5 class="modal-title" id="exampleModalLabel3">Ejercicio 3</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>">
              <div class="modal-body" id="ejercicio1">
                  <label for="exampleInputEmail2" style="font-size: 30px;">Seleccione un estilo y un color</label>
                <div class="container" style="font-size: 18px;">
                  <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="custom1" name="estilo" class="custom-control-input" value="Negrita">
                    <label class="custom-control-label" for="custom1">Negrita</label>
                  </div>
                  <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="custom2" name="color" class="custom-control-input" value="Verde">
                    <label class="custom-control-label" for="custom2">Verde</label>
                  </div>
                  <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="custom3" name="estilo" class="custom-control-input" value="Normal" checked>
                    <label class="custom-control-label" for="custom3">Normal</label>
                  </div>
                  <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="custom4" name="color" class="custom-control-input" value="Azul" checked>
                    <label class="custom-control-label" for="custom4">Azul</label>
                  </div>
                  <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="custom5" name="estilo" class="custom-control-input" value="Cursiva">
                    <label class="custom-control-label" for="custom5">Cursiva</label>
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
