  <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-1 main">  
  <div class="row placeholders">        

<div class="panel panel-primary">
<div class="panel-heading">
    <h3 class="panel-title centrar"><?php print $titulo; ?></h3>    
  </div>    
<div class="panel-body">
  <?php    	    
    foreach ($info as $row) {
      $cabeceras = array_keys($row);
      $i = 0 ;      
        foreach ($row as $item) {
		      print'<div class="col-md-3"><b>'. $cabeceras[$i] .'</b>&nbsp;' . $item . '</div>';
          $i++;
        }
      }
  ?>
</div>
</div>
</div>