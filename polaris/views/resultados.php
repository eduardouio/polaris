<div class="panel panel-info">
<div class="panel-heading">
    <h3 class="panel-title centrar">Listado Vehículos</h3>    
  </div>
  <div class="panel-body">
     <table class="table table-bordered table-hover">                    
      <tbody>
        <?php
        #usamos la variable para imprmir las cabeceras
        $i = 0;
        foreach ($resultados as $row) {
            if ($i == 0){
                print('<tr>');
                $cabeceras = array_keys($row);
                foreach ($cabeceras as $key) {
                    print('<th>' . $key .'</th>');
                }
                print('<th>Acciones</th>');                
                print('</tr>');
            }            
            print('<tr>');
            foreach ($row as $item) {            
                print '<td>' . $item . '</td>';
                }
            print('
              <td>
              <div class="dropdown">
              <a href="#" class="btn btn-info dropdown-toggle" data-toggle="dropdown"><b class="caret"></b></a>
                <ul class="dropdown-menu">
                <li><a href="'. base_url() .'index.php/vehiculo/' . $row['VIN']. '"><span></span>Ver Vehículo</a></li>
                <li><a href="'. base_url() .'index.php/mantenimiento/' . $row['VIN']. '">Ver Mantenimientos</a></li>
                <li><a href="'. base_url() .'index.php/inspeccion/' . $row['VIN']. '">Ver Inspecciones</a></li>
                <li><a href="'. base_url() .'index.php/reparacion/' . $row['VIN']. '">Ver Reparaciones</a></li>                
              </div>
              </td>
              ');
            print('</tr>');
            $i++;
        }
        ?>
      </tbody>
    </table>
  </div>
  </div>
  </div>     
