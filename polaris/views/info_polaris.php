  <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">  
  <div class="row placeholders">        
  <div class="row breadcrumb">
  <?php
  	$i = 0;
  	foreach ($info->result_array() as $row) {  		
  		if ($i==1){
  			break;
  		}
		print'<div class="col-md-4"><b>RUC:</b>&nbsp;' . $row['id_cliente'] . '</div>';
		print'<div class="col-md-4"><b>Nombre:</b>&nbsp;' . $row['nombre'] .'</div>';
	  	print'<div class="col-md-4"><b>Teléfono:</b>&nbsp;' . $row['telefono'] . '</div>';
	  	print'<div class="col-md-4"><b>Nombre Contacto:</b>&nbsp;' . $row['contacto'] .'</div>';
	  	print'<div class="col-md-4"><b>Email Contacto:</b>&nbsp;' . $row['email'] . '</div>  ';
	  	print'<div class="col-md-4"><b>Teléfono Contacto:</b>&nbsp;' . $row['telf'] .'</div>  ';
	  	$i++;
  	}
  ?>
  
</div>
</div>