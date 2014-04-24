
      <div class="panel panel-success">
        <div class="panel-heading">
    <h3 class="panel-title centrar">Litsado Vehículos</h3>    
  </div>
     <table class="table table-hover">
      <thead>
        <tr>
          <th>VIN</th>
          <th>Modelo</th>
          <th>Ingreso</th>
          <th>Ciudad</th>
          <th>Conductor</th>
          <th>Telefono</th>          
        </tr>
      </thead>
      <tbody>
        <tr>
        <?php
        foreach ($vehiculos->result_array() as $vehiculo) {
          print('<tr>');
          print '<td>' . $vehiculo['id_vehiculo'] . '</td>';
          print '<td>' . $vehiculo['modelo'] . '</td>';
          print '<td>' . $vehiculo['ingreso'] . '</td>';
          print '<td>' . $vehiculo['ciudad'] . '</td>';
          print '<td>' . $vehiculo['conductor'] . '</td>';
          print '<td>' . $vehiculo['telefono'] . '</td>';
          print('</tr>');
        }

        ?>
        
        </tr>       
      </tbody>
    </table>
      </div>
      </div>     
