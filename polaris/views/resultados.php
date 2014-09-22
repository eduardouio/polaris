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
                print('<th>#');
                print('</th>');
                $cabeceras = array_keys($row);
                foreach ($cabeceras as $key) {
                    print('<th>' . $key .'</th>');
                }                
                print('</tr>');
            }            
            print('<tr>');
            #imprimimos el contenido de las columnas de la tabla
            $x = 0;
            $item = $i + 1;
            print('<td>'. $item  . '</td>');
            foreach ($row as $item) {            
                if ($x == 0){
                  print '<td><a href="'. base_url() .'index.php/vehiculo/listado/' . $row['VIN']. '">' . $item . '</a></td>';                  
                $x++;
                }else{
                  print '<td>' . $item . '</td>';                                    
                }
                }            
            print('</tr>');
            $i++;
        }
        ?>
      </tbody>
    </table>
  </div>
  </div>
  </div>     
