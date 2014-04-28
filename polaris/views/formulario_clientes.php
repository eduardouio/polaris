<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-1 main">
        <h3 class="page-header">GELVS Mantenimiento Polaris</h3>
        <form role="form" action="<?php print base_url();?>index.php/home" method="post">
          <div class="form-group">
            <label for="exampleInputEmail1">Listado Clientes</label>            
            <select class="form-control" placeholder="Seleccione Cliente" name='cliente'>
            <option>
              Seleccione...
            </option>
              <?php
              foreach ($query->result_array() as $row) {
                print('<option value = "' . $row['id_cliente']  . '">');                
                print($row['nombre']);
                print('</option>');                        
              }
              ?>              
            </select>
          </div>          
          <button type="submit" class="btn btn-default">Consultar</button>
        </form>
