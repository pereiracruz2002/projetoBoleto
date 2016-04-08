<?php
defined('BASEPATH') OR exit('No direct script access allowed');

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
define('DIR_WRITE_MODE', 0755);

/*
|--------------------------------------------------------------------------
| File Stream Modes
|--------------------------------------------------------------------------
|
| These modes are used when working with fopen()/popen()
|
*/

define('FOPEN_READ', 'rb');
define('FOPEN_READ_WRITE', 'r+b');
define('FOPEN_WRITE_CREATE_DESTRUCTIVE', 'wb'); // truncates existing file data, use with care
define('FOPEN_READ_WRITE_CREATE_DESTRUCTIVE', 'w+b'); // truncates existing file data, use with care
define('FOPEN_WRITE_CREATE', 'ab');
define('FOPEN_READ_WRITE_CREATE', 'a+b');
define('FOPEN_WRITE_CREATE_STRICT', 'xb');
define('FOPEN_READ_WRITE_CREATE_STRICT', 'x+b');

/*
|--------------------------------------------------------------------------
| Display Debug backtrace
|--------------------------------------------------------------------------
|
| If set to TRUE, a backtrace will be displayed along with php errors. If
| error_reporting is disabled, the backtrace will not display, regardless
| of this setting
|
*/
define('SHOW_DEBUG_BACKTRACE', TRUE);

/*
|--------------------------------------------------------------------------
| Exit Status Codes
|--------------------------------------------------------------------------
|
| Used to indicate the conditions under which the script is exit()ing.
| While there is no universal standard for error codes, there are some
| broad conventions.  Three such conventions are mentioned below, for
| those who wish to make use of them.  The CodeIgniter defaults were
| chosen for the least overlap with these conventions, while still
| leaving room for others to be defined in future versions and user
| applications.
|
| The three main conventions used for determining exit status codes
| are as follows:
|
|    Standard C/C++ Library (stdlibc):
|       http://www.gnu.org/software/libc/manual/html_node/Exit-Status.html
|       (This link also contains other GNU-specific conventions)
|    BSD sysexits.h:
|       http://www.gsp.com/cgi-bin/man.cgi?section=3&topic=sysexits
|    Bash scripting:
|       http://tldp.org/LDP/abs/html/exitcodes.html
|
*/
define('EXIT_SUCCESS', 0); // no errors
define('EXIT_ERROR', 1); // generic error
define('EXIT_CONFIG', 3); // configuration error
define('EXIT_UNKNOWN_FILE', 4); // file not found
define('EXIT_UNKNOWN_CLASS', 5); // unknown class
define('EXIT_UNKNOWN_METHOD', 6); // unknown class member
define('EXIT_USER_INPUT', 7); // invalid user input
define('EXIT_DATABASE', 8); // database error
define('EXIT__AUTO_MIN', 9); // lowest automatically-assigned error code
define('EXIT__AUTO_MAX', 125); // highest automatically-assigned error code


define('FB_ID', '100115093663457');
define('FB_SECRET', 'e338fce52cbdddc3a8d236833f95b5c9');

define('UPLOAD_PATH', FCPATH.'../videos/');
define('ARQUIVOS_PATH', FCPATH.'../arquivos_downloads/');
define('THUMB_PATH', FCPATH.'thumbs/');
define('IMG_PATH', FCPATH.'images/');
define('LESS_PATH', FCPATH.'assets/less/');
define('SITE_URL', 'http://app.facilemecursos.com.br/');
define('PAINEL_URL', 'http://app.facilemecursos.com.br/admin/');

if(ENVIRONMENT == 'development'){
    define('PAGSEGURO_EMAIL','de.akao@gmail.com');
    define('PAGSEGURO_TOKEN','B348949A90E54BBE980913F7F0C494A6');
    define('PAGSEGURO_NOTIFICATION_URL','http://denis.facilemecursos.com.br/admin/pagamento/notificacoes');
    define('VIDEO_URL', 'http://127.0.0.1:3000/');
    define('CHAT_URL', 'http://dev.helpdesk.facileme.com.br/');
} else {
    define('PAGSEGURO_EMAIL','atendimento@wvcomunicacao.com.br');
    define('PAGSEGURO_TOKEN','5340E7EFE77D4D029FD9248D1921F5E4');
    define('PAGSEGURO_NOTIFICATION_URL','https://app.facilemecursos.com.br/admin/pagamento/notificacoes');
    define('VIDEO_URL', 'http://videos.facilemecursos.com.br/');
    define('CHAT_URL', 'http://live.facileme.com.br/');
}
