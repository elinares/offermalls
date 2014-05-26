<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	http://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There area two reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router what URI segments to use if those provided
| in the URL cannot be matched to a valid route.
|
*/

$route['default_controller'] = "admin";
$route['404_override'] = '';

/*MY ROUTES*/

$route['dashboard'] = "admin/dashboard";

/*Cargos*/
$route['cargos'] = "admin/cargos";
$route['agregar_cargo'] = "admin/agregar_cargo";
$route['editar_cargo/(:any)'] = "admin/editar_cargo/$1";
$route['eliminar_cargo/(:any)'] = "admin/eliminar_cargo/$1";
/*Categorías*/
/*Centros Comerciales*/                        
/*Departamentos*/
$route['departamentos'] = "admin/departamentos";
$route['agregar_departamento'] = "admin/agregar_departamento";
$route['editar_departamento/(:any)'] = "admin/editar_departamento/$1";
$route['eliminar_departamento/(:any)'] = "admin/eliminar_departamento/$1";
/*Estados de Clientes*/
/*Estados de Ofertas*/
/*Municipios*/
/*Subcategorias*/
/*Sucursales*/
/*Tipos de Descuentos*/
$route['tdescuentos'] = "admin/tdescuentos";
$route['agregar_tdescuento'] = "admin/agregar_tdescuento";
$route['editar_tdescuento/(:any)'] = "admin/editar_tdescuento/$1";
$route['eliminar_tdescuento/(:any)'] = "admin/eliminar_tdescuento/$1";
/*Usuarios*/
$route['usuarios'] = "admin/usuarios";
$route['agregar_usuario'] = "admin/agregar_usuario";
$route['editar_usuario/(:any)'] = "admin/editar_usuario/$1";
$route['eliminar_usuario/(:any)'] = "admin/eliminar_usuario/$1";
/*Usuarios Finales*/
$route['ufinales'] = "admin/ufinales";
/*Usuarios de Sucursales*/

/* End of file routes.php */
/* Location: ./application/config/routes.php */