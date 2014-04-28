<?php
/**
* Modelo para realiza consultas complejas a la base de datos 
* @return resut_array()
*/

class Modelo extends CI_Model{
	private $Query_;
	public function __construct(){
		parent::__construct();				
	}


	/**
	 * Modelo para buscar vehpiculos 
	 * @param (str) $id_cliente = ruc del cliente
	 * @return (array) result->array()
	 */
	public function vehiculos($id_cliente){
		$sql = "SELECT
				a.id_vehiculo AS VIN, a.modelo AS Modelo, a.ingreso AS Ingreso,
				c.nombre AS Ciudad,
				d.nombre AS Encargado, concat(d.celular, _utf8'/', d.telefono ) AS `Tel Encargado`
				FROM vehiculo AS a
				LEFT JOIN ciudad AS c ON(a.id_ciudad = c.id_ciudad)
				LEFT JOIN contacto AS d ON(a.id_contacto = d.id_contacto)
				WHERE a.id_cliente = '$id_cliente'
				ORDER BY a.id_vehiculo DESC;";

		$result = $this->db->query($sql);
		return $result->result_array();
	}


	/**
	 * Metodo para buscar clientes
	 * @param (str) RUC del cliente
	 * @return (array) result->array()
	 */
	public function clientes($id_cliente){
		$sql = "SELECT a.id_cliente AS RUC, a.nombre AS Nombre, a.telefono AS Telefono, a.direccion AS `Dirección`,
				b.nombre AS Contacto, concat(b.celular, _utf8'/', b.telefono ) AS `Tel Contacto`,
				c.nombre AS Ciudad
				FROM cliente AS a
				LEFT JOIN contacto AS b ON (a.id_contacto = b.id_contacto)
				LEFT JOIN ciudad AS c ON (a.id_ciudad = c.id_ciudad)
				WHERE a.id_cliente = $id_cliente
				ORDER BY a.nombre;
				";
		$result = $this->db->query($sql);
		return $result->result_array();

	}

	/**
	 * Metodo para obtener ultimo mantenimiento
	 * @param (str) VIN vehiculo
	 * @return (array) result->array()
	 */
	public function ultimo_mantenimiento($id_vehiculo){
		$sql = "select a.id_vehiculo as VIN, a.periodo as Horas, a.fecha as Fecha, a.kilometros as KMS,
				b.nombre as Ciudad
				from mantenimiento as a 
				left join ciudad as b on (a.id_ciudad = b.id_ciudad)
				where a.id_vehiculo = '$id_vehiculo'
				order by a.id_mantenimiento desc limit 1;";
		$result = $this->db->query($sql);
		return $result->result_array();

	}

}