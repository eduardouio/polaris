<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="sr-only">Polaris</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="<?php print base_url();?>">GELVS Polaris&nbsp;&nbsp;<span class="glyphicon glyphicon-globe"></span></a>
      </div>
      <div class="navbar-collapse collapse">
        <ul class="nav navbar-nav navbar-right">          
          <li class="<?php @print $clientes; ?>"><a href="<?php print base_url();?>"><span class="glyphicon glyphicon-search"></span>&nbsp;&nbsp;Buscar Mantenimientos</a></li>                      
          <li class="<?php @print $reparaciones; ?>"><a href="<?php print base_url();?>index.php/reparaciones"><span class="glyphicon glyphicon-compressed"></span>&nbsp;&nbsp; Reparaciones</a></li>                      
          <li class="<?php @print $solicitud; ?>"><a href="<?php print base_url();?>index.php/home/solicitud"><span class="glyphicon glyphicon-briefcase"></span>&nbsp;&nbsp; Solicitar Mantenimiento</a></li>
        </ul>
      </div>
    </div>
  </div>