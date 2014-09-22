                                <small style="float:right;font: 70% sans-serif; ">
    Desarrollado por: <a href="http://twitter.com/eduardouio">Eduardo Villota</a>
    <br>Todos los Derechos Reservados
  </small>
<!-- Bootstrap core JavaScript
  ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->  
  <script src="<?php print base_url();?>js/jquery-1.10.2.js"></script>
  <script src="<?php print base_url();?>js/jquery-ui-1.10.4.custom.js"></script>  
  <script src="<?php print base_url();?>js/bootstrap.js"></script>
  <script src="<?php print base_url();?>js/docs.min.js"></script>
  <script type="text/javascript">
$(document).ready(function(){
$("#cliente").click(function(){ 
  $("#ajax").slideUp(1); 
  $("#ajax").load("<?php print base_url();?>form_cliente.html");
  $("#ajax").slideDown('slow');
});

$("#vin").click(function(){ 
  $("#ajax").slideUp(1); 
  $("#ajax").load("<?php print base_url();?>form_vin.html");
  $("#ajax").slideDown('slow');  
}); 
}); 
 </script>
<script type="text/javascript">
		$(function(){
		$('#vin').autocomplete({
		source : '<?php  print base_url();?>/index.php/home/vehiculo'
		});
		});
</script> 
</body>
</html>
                            