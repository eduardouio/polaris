<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * GELVS Equipo de Mantenimiento Polars
 * Clase encargada de presentar los vehículos de las entidades 
 *
 * @var $Pagina_ Variable que almacena el html de la Pagina
 * @var $CatalogoVistas Alamcena el nombre de una vista y sus datos
 * @var $Talbla_ nombre de tabla a la que se la van a hacer las consultas
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
class Home extends CI_Controller {
	private $Pagina_;
	private $Controller_ = 'home';
	private $CatalogoVistas_;

	/**
	* Funcion constructora
	* Cargamos archivos necesarios para la funcionalidad
	*/
	public function __construct(){
		parent::__construct();		
		$this->load->library('session')	;
		$this->load->library('form_validation');
		$this->load->model('modelo');
	}

	/**
	 * $_POST = formulario seleccionde cliente
	 * !$_POST = Lsitado vehículos cliente
	 */
	public function index(){	
			# Mostramos el formulario
			$this->CatalogoVistas_['header'] = array('titulo' => 'Polaris Mantenimiento' );
			$this->CatalogoVistas_['menu'] = array('clientes' => 'active' );			
			$this->CatalogoVistas_['formulario'] = array('clientes' => 'active' );
			$this->mostrarhtml($this->CatalogoVistas_);
		}

	/**
	 *  Retorna el listado de vehiculos de un cliente
	 */
	public function cliente(){
			# Mostrar los vehiculos del cliente
		$this->CatalogoVistas_['header'] = array('titulo' => 'Información Cliente' );
		$this->CatalogoVistas_['menu'] = array('clientes' => 'active' );
		$this->CatalogoVistas_['info'] = array('info' => $this->modelo->clientes($this->uri->segment(3)));
		$this->CatalogoVistas_['resultados'] = array('resultados' => $this->modelo->vehiculos($this->uri->segment(3)));
		$this->mostrarhtml($this->CatalogoVistas_);
		
	}



	/**
	 * Retorna un listado de cientes
	 */
	public function vehiculo(){
		if ($_POST){
		$this->CatalogoVistas_['header'] = array('titulo' => 'Vehiculos Encontrados' );
		$this->CatalogoVistas_['menu'] = array('clientes' => 'active' );		
		$this->CatalogoVistas_['resultados'] = array('resultados' => $this->modelo->buscarVehiculo($this->input->post('vin')));
		$this->mostrarhtml($this->CatalogoVistas_);
	}else{
		$this->index();
	}
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
			
			$this->Pagina_ = $this->Pagina_ . $this->load->view('pie','',true);
			print $this->Pagina_;
	}
}