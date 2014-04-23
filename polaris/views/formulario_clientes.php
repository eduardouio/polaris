<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
        <h3 class="page-header">GELVS Mantenimiento Polaris</h3>
        <form role="form" action="<?php print base_url();?>index.php/home.php">
          <div class="form-group">
            <label for="exampleInputEmail1">Listado Clientes</label>
            <select class="form-control" placeholder="Seleccione Cliente">
              <?php
              foreach ($clientes as $cliente) {
                print('<option value = "' . $cliente['id_cliente']  . ' ">');
                print($cliente['nombre']);
                print('</option>')
              }
              ?>              
            </select>
          </div>          
          <button type="submit" class="btn btn-default">Consultar</button>
        </form>
