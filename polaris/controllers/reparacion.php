<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * GELVS Equipo de Mantenimiento Polars
 * Clase encargada de presentar los vehículos de las entidades 
 *
 * @var $Pagina_ Variable que almacena el html de la Pagina
 * @var $CatalogoVistas Alamcena el nombre de una vista y sus datos
 * @var $Talbla_ nombre de tabla a la que se la van a hacer las consultas
 * @var $Config_ Parametros de configuracion para la paginacion
 * @var $Limit_ Lmite superior de consulta <paginacion desde>
 * @var $Offset_ Limite inferior de consultas <paginacion hasta>
 *
 * @package Polaris
 * @subpackage  
 * @author Eduardo Villta <ev_villota@hotmail.com> <@eduardouio> 
 * @copyright 2014 Eduardo Villta <eduardouio7@gmail.com>
 * @license (c)Eduardo Villota Todos los derechos reservados 
 * @link http://twitter.com/eduardouio
 * @version 0.1
 * @access public
 */
class Reparaciones extends CI_Controller {
	private $Controller_ = 'home';
	private $CatalogoVistas_;
	private $Tabla_ = 'v_vhiculos';
	private $Offset_ = 5;

	/**
	* Funcion constructora
	* Cargamos archivos necesarios para la funcionalidad
	*/
	public function __construct(){
		parent::__construct();		
		$this->load->library('session')	;
		$this->load->model('modelo');		
		$this->load->library('form_validation');		
	}



	/**
	 * Im prime la pantalla de inicio
	 */
	public function index()
	{	
		$data =  array('valor' =>  'Comiendo desde el centro del planeta');
		$this->load->view('welcome_message',$data);
	}


	/**
	* Se encrarga de recibir la informacion y genera la pantalla de salia
	* Todos los valores se guardan en una variable de clase $Pagina_	
	* Es este metodo el que decide que vistas mostrar a partir de los paramtros recibidos
	*
	* @param array $catalogo array con las plantillas necesarias y su informacion
	*	
	*/
	private function mostrarhtml($catalogo){		
			$vistas;
			$this->Pagina_;
			foreach ($catalogo as $arreglos => $nombres) {								
					$vistas[] =  $arreglos;				
			}
			
			foreach ($vistas as $nombre) {
				$this->Pagina_ = $this->Pagina_ . $this->load->view($nombre,$catalogo[$nombre],true);
			}
			
			$this->Pagina_ = $this->Pagina_ . $this->load->view('v_fpie','',true);
			print $this->Pagina_;
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */