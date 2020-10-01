<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'home';
$route['do_login'] = 'home/do_login';

$route['printpdf'] = 'home/printpdf';
$route['registrasi'] = 'home/registrasi';
$route['hal_user'] = 'home/user_home';
$route['do_logout'] = 'home/logout';
$route['editdatadiri'] = 'home/editdatadiri';
$route['hapustransaksi/(:any)'] = 'home/hapustransaksi/$1';
$route['hal_admin'] = 'home/admin_home';
$route['daftaruser'] = 'home/daftaruser';
$route['detailtransaksi/(:any)'] = 'home/detail/$1';
$route['ubahpassword'] = 'home/ubahpassword';
$route['do_login_admin'] = 'home/do_login_admin';
$route['do_logout_admin'] = 'home/logout_admin';
$route['tambahadmin'] = 'home/tambahadmin';
$route['daftaradmin'] = 'home/daftaradmin';
$route['hapusadmin/(:any)'] = 'home/hapusadmin/$1';
$route['cetak/(:any)'] = 'home/cetak/$1';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
