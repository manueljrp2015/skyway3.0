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

$route['default_controller'] = "frontend/sk_init_controller";

/*
 * inicio de session
 */
$route['in'] = "frontend/sk_init_session_controller";
$route['exec-in'] = "frontend/sk_init_session_controller/exec_in";

/*
 * recuperacion de clave
 */
$route['exec-forgot-p'] = "frontend/sk_forgot_pass_controller/change_password";
$route['exec-renew-pass'] = "frontend/sk_forgot_pass_controller/page_renew_pass";
$route['exec-renew'] = "frontend/sk_forgot_pass_controller/exec_renew_pass";
/*
 * recuperacion de cuenta
 */
$route['mayday-email'] = "frontend/sk_mayday_controller";
$route['mayday-exec'] = "frontend/sk_mayday_controller/mayday_exec_query";
$route['exec-change-e'] = "frontend/sk_mayday_controller/mayday_exec_change";
$route['404_override'] = '';

/*
 * registrarse
 */

$route['getrefer'] = "frontend/sk_refers_controller";
$route['search-referrals'] = "frontend/sk_refers_controller/get_referral_search";
$route['addReferr'] = "frontend/sk_register_controller";
$route['accept-referrals'] = "frontend/sk_register_controller/view_register_form";


/*
 * validadores
 */

$route['verify-nick-exec'] = "frontend/sk_validador_controller/exec_verify_nick";
$route['verify-email-exec'] = "frontend/sk_validador_controller/exec_verify_email";
$route['verify-phone-exec'] = "frontend/sk_validador_controller/exec_verify_phone";

/*
 * catalogos
 */

$route['get-tipo-id'] = "frontend/sk_catalogos_controller/get_tipo_id_all";

/*
 * bakend
 */
$route['bk-admin'] = "backend/skback_init_controller";
$route['bk-admin/users-admin'] = "backend/skback_usersadmin_controller";


/* End of file routes.php */
/* Location: ./application/config/routes.php */