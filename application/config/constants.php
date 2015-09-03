<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
|--------------------------------------------------------------------------
| File and Directory Modes
|--------------------------------------------------------------------------
|
| These prefs are used when checking and setting modes when working
| with the file system.  The defaults are fine on servers with proper
| security, but you may wish (or even need) to change the values in
| certain environments (Apache running a separate process for each
| user, PHP under CGI with Apache suEXEC, etc.).  Octal values should
| always be used to set the mode correctly.
|
*/
define('FILE_READ_MODE', 0644);
define('FILE_WRITE_MODE', 0666);
define('DIR_READ_MODE', 0755);
define('DIR_WRITE_MODE', 0777);

/*
|--------------------------------------------------------------------------
| cosntantes globales skyway
|--------------------------------------------------------------------------
|
*/

define('NAME_SITE', "Red Skyway 3.0");
define('DOCTYPE', "<!DOCTYPE html>");
define('CHARSET', "UTF-8");
define('META-DESCRIPTION', "");
define('META-KEYWORDS', "");
define('META_AUTHOR', "Skyway internacional, C.A");

define('EMAIL_POSTMASTER', "postmaster@red.skyway.com.ve");

define('DIR_FRONTEND_TERCEROS', 'assets/frontend/terceros/');
define('DIR_FRONTEND_CSS', 'assets/frontend/css/');
define('DIR_FRONTEND_JS', 'assets/frontend/js/');
define('DIR_FRONTEND_IMG', 'assets/frontend/img/');
define('DIR_FRONTEND_VIDEO', 'assets/frontend/video/');

define('LOGO_NAV', 'assets/frontend/img/page/logo.png');



/*
 * CONSTANTES BACKEND
 */

define('NAME_SITE_BK', "Admin - Skyway 3.0");
define('DOCTYPE_BK', "<!DOCTYPE html>");
define('CHARSET_BK', "UTF-8");
define('META-DESCRIPTION_BK', "");
define('META-KEYWORDS_BK', "");
define('META_AUTHOR_BK', "Skyway internacional, C.A");

define('DIR_BACKEND_TERCEROS', 'assets/backend/terceros/');
define('DIR_BACKEND_CSS', 'assets/backend/css/');
define('DIR_BACKEND_JS', 'assets/backend/js/');
define('DIR_BACKEND_IMG', 'assets/backend/img/');
define('DIR_BACKEND_VIDEO', 'assets/backend/video/');
define('DIR_BACKEND_FONT', 'assets/backend/fonts/');
define('DIR_BACKEND_FONTAWESOME', 'assets/backend/font-awesome/');

define('LOGO_NAV_BK', 'assets/frontend/img/page/logo.png');

/*
|--------------------------------------------------------------------------
| File Stream Modes
|--------------------------------------------------------------------------
|
| These modes are used when working with fopen()/popen()
|
*/

define('FOPEN_READ',							'rb');
define('FOPEN_READ_WRITE',						'r+b');
define('FOPEN_WRITE_CREATE_DESTRUCTIVE',		'wb'); // truncates existing file data, use with care
define('FOPEN_READ_WRITE_CREATE_DESTRUCTIVE',	'w+b'); // truncates existing file data, use with care
define('FOPEN_WRITE_CREATE',					'ab');
define('FOPEN_READ_WRITE_CREATE',				'a+b');
define('FOPEN_WRITE_CREATE_STRICT',				'xb');
define('FOPEN_READ_WRITE_CREATE_STRICT',		'x+b');


/* End of file constants.php */
/* Location: ./application/config/constants.php */