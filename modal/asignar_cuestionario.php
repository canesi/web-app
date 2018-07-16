<?php
?>

<div class="modal fade" tabindex="-1" role="dialog" id="NewAsignModal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h2 class="modal-title">Nueva Asignacion</h2>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p><h4>Seleccione lo siguiente</h4></p>
        <form class="form-horizontal" method="POST" id="guardar_asignacion" name="guardar_asignacion">

          <div class="form-group">
            <label for="tipo_usuario" class="col-sm-3 control-label">Tipo Usuario</label>
            <div class="col-sm-8">
              <select class="selectpicker" id="tipo_usuario">
                <option>Opcion1</option>
                <option>Opcion2</option>
                <option>Opcion3</option>
              </select>
            </div>
          </div>

          <div class="form-group">
              <label for="tipo_cliente" class="col-sm-3 control-label">Tipo Cliente</label>
              <div class="col-sm-8">
                <select class="selectpicker" id="tipo_cliente">
                  <option>Opcion1</option>
                  <option>Opcion2</option>
                  <option>Opcion3</option>
                </select>
              </div>
          </div>

          <div class="form-group">
              <label for="cuestionario_dispo" class="col-sm-3 control-label">Cuestionario Disponible</label>
              <div class="col-sm-8">
                <select class="selectpicker" id="cuestionario_dispo">
                  <option>Opcion1</option>
                  <option>Opcion2</option>
                  <option>Opcion3</option>
                </select>
              </div>
          </div>

        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary">Save changes</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>