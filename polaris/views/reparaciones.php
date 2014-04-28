  <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-1 main">  
  <div class="row placeholders">        
<div class="panel panel-success">
<div class="panel-heading">
    <h3 class="panel-title centrar">Reparacioness</h3>    
  </div>
  <div class="panel-body">
     <table class="table table-bordered table-hover">                    
      <tbody>
        <?php
        #usamos la variable para imprmir las cabeceras
        $i = 0;
        foreach ($reparaciones as $row) {
            if ($i == 0){
                print('<tr>');
                $cabeceras = array_keys($row);
                foreach ($cabeceras as $key) {
                    print('<th>' . $key .'</th>');
                }                
                print('</tr>');
            }            
            print('<tr>');
            #imprimimos el contenido de las columnas de la tabla
            $x = 0;
            foreach ($row as $item) {            
                if ($x == 0){
                  print '<td><a href="'. base_url() .'index.php/vehiculo/' . $row['VIN']. '">' . $item . '</a></td>';                  
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
  </div>     
  </div>     
