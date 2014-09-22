 <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-1 main">  
 <div class="row placeholders">   
 <div>
 	<?php
 	@print($alerta);
 	?>
 </div>
<form class="form-horizontal" role="form" method="post" action="<?php print base_url();?>/index.php/home/solicitud">
  <div class="form-group">
    <label for="provincia" class="col-sm-2 control-label">Provincia</label>
    <div class="col-sm-10">
    <select name='provincia'>
    <option value="none" required="required">Seleccione...</option>
    <option value="Bolivar">Direccion Provincial Agropecuaria De Bolivar</option>
	<option value="Tungurahua">Dirección Provincial Agropecuaria De Tunguragua</option>
	<option value="Chimborazo">Dirección Provincial Agropecuaria De Chimborazo</option>
	<option value="Cotopaxi">Director Tecnico Area De Cotopaxi</option>
	<option value="Cañar">Dirección Provincial Agropecuaria Del Cañar</option>
	</select>
    </div>
  </div>
  <div class="form-group">
    <label for="entrada" class="col-sm-2 control-label">Solicitado Por:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name ="nombres" id="nombres" placeholder="Nombre y Apellido del solicitante" value="<?php echo set_value('mantenimientos'); ?>">
    </div>
  </div><div class="form-group">
    <label for="entrada" class="col-sm-2 control-label">Cantidad de Mantenimientos:</label>
    <div class="col-sm-10">
      <input type="number" class="form-control" name ="mantenimientos" id="mantenimientos" placeholder="Numero que indique la cantidad" value="<?php echo set_value('mantenimientos'); ?>">
    </div>
  </div>
  <div class="form-group">
    <label for="entrada" class="col-sm-2 control-label">Catidad de Reparaciones:</label>
    <div class="col-sm-10">
      <input type="number" class="form-control" name="reparaciones" id="reparaciones" placeholder="Numero que indique la cantidad" value="<?php echo set_value('reparaciones'); ?>">
    </div>
  </div>
  <div class="form-group">
    <label for="entrada" class="col-sm-2 control-label">Cantidad de Inspecciones:</label>
    <div class="col-sm-10">
      <input type="number" class="form-control" name="inspecciones" id="inspecciones" placeholder="Numero que indique la cantidad" value="<?php echo set_value('inspecciones'); ?>">
    </div>
  </div>
  <div class="form-group">
    <label for="entrada" class="col-sm-2 control-label">Detalles Adicionales:</label>
    <div class="col-sm-10">
      <textarea  class="form-control" name="notas" id="notas" placeholder="Listado de Ciudades cantones o algún requerimiento adicional" rows="10"></textarea>
      <?php echo set_value('notas'); ?>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-primary">Enviar Solicitud</button>
    </div>
  </div>
</form>
</div>
</div>