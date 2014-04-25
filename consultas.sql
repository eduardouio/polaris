-- informacion básica del vehiculo
select 
a.id_vehiculo as VIN, a.modelo as Modelo, a.ingreso as Ingreso,
c.nombre as Ciudad,
d.nombre as Encargado, concat(d.celular, _utf8'/', d.telefono ) as `Tel Encargado`
from vehiculo as a
left join ciudad as c on(a.id_ciudad = c.id_ciudad)
left join contacto as d on(a.id_contacto = d.id_contacto)
order by a.id_vehiculo desc;


-- informacion básica del cliente
select a.id_cliente as RUC, a.nombre as Nombre, a.telefono as Telefono, a.direccion as `Dirección`,
b.nombre as Contacto, concat(b.celular, _utf8'/', b.telefono ) as `Tel Contacto`,
c.nombre as Ciudad
from cliente as a
left join contacto as b on (a.id_contacto = b.id_contacto)
left join ciudad as c on (a.id_ciudad = c.id_ciudad)
order by a.nombre;


-- informacion mantenimientos
select a.id_mantenimiento as IDM, a.id_vehiculo as VIN, a.fecha as Fecha, a.kilometros as KM, a.periodo as HRS,
b.nombre as Ciudad,
c.id_viaje as Viaje
from mantenimiento as a
left join ciudad as b on (a.id_ciudad = b.id_ciudad)
left join viaje as c on(a.id_viaje = c.id_viaje)
order by a.id_vehiculo, a.id_mantenimiento;

-- detalle de los mantenimientos
select a.id_mantenimiento_detalle as IDMD, a.id_mantenimiento as IDM, a.cantidad as Cantidad, a.id_inventario as COD,
b.nombre as Producto, b.unidad as Unidad,
c.fecha as Fecha
from mantenimiento_detalle as a
left join inventario as b on (a.id_inventario = b.id_inventario)
left join mantenimiento as c on (a.id_mantenimiento = c.id_mantenimiento)
order by a.id_mantenimiento;
