<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'C_karya/beranda';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

//Karya  
$route['admin'] = 'admin/C_home/home';
$route['admin/dashboard'] = 'admin/C_home/home';
$route['admin/login'] = 'admin/C_login/login';
$route['admin/login/aksi'] = 'admin/C_login/aksi';
$route['admin/login/keluar/(:any)'] = 'admin/C_login/logout';
$route['admin/login/keluar'] = 'admin/C_login/logout';

$route['admin/user'] = 'admin/C_user/list';


// //home
// $route['home'] = 'C_home/list';
// $route['home/data'] = 'C_home/data';
// $route['home/getKarya'] = 'C_home/getKarya';
// $route['home/get/(:any)'] = 'C_home/get/$1';


//subjek
$route['admin/subjek'] = 'admin/C_subjek/list';
$route['admin/subjek/data'] = 'admin/C_subjek/data';
$route['admin/subjek/getsubjek'] = 'admin/C_subjek/getsubjek';
$route['admin/subjek/get/(:any)'] = 'admin/C_subjek/get/$1';
$route['admin/subjek/insert'] = 'admin/C_subjek/insert';
$route['admin/subjek/update'] = 'admin/C_subjek/update';
$route['admin/subjek/delete/(:any)'] = 'admin/C_subjek/delete/$1';

//publikasi
$route['admin/publikasi'] = 'admin/C_publikasi/list';
$route['admin/publikasi/data'] = 'admin/C_publikasi/data';
$route['admin/publikasi/getpublikasi'] = 'admin/C_publikasi/getpublikasi';
$route['admin/publikasi/get/(:any)'] = 'admin/C_publikasi/get/$1';
$route['admin/publikasi/insert'] = 'admin/C_publikasi/insert';
$route['admin/publikasi/update'] = 'admin/C_publikasi/update';
$route['admin/publikasi/delete/(:any)'] = 'admin/C_publikasi/delete/$1';


//satker
$route['admin/satker'] = 'admin/C_satker/list';
$route['admin/satker/data'] = 'admin/C_satker/data';
$route['admin/satker/getsatker'] = 'admin/C_satker/getsatker';
$route['admin/satker/get/(:any)'] = 'admin/C_satker/get/$1';
$route['admin/satker/insert'] = 'admin/C_satker/insert';
$route['admin/satker/update'] = 'admin/C_satker/update';
$route['admin/satker/delete/(:any)'] = 'admin/C_satker/delete/$1';

//User
$route['admin/user'] = 'admin/C_user/list';
$route['admin/user/data'] = 'admin/C_user/data';
$route['admin/user/get/(:any)'] = 'admin/C_user/get/$1';
$route['admin/user/getUser'] = 'admin/C_user/getUser';
$route['admin/user/insert'] = 'admin/C_user/insert';
$route['admin/user/update'] = 'admin/C_user/update';
$route['admin/user/delete/(:any)'] = 'admin/C_user/delete/$1';
$route['admin/user/set/(:any)/(:any)'] = 'admin/C_user/set/$1/$2';


//karya
$route['admin/karya'] = 'admin/C_karya/list';
$route['admin/karya/data/(:any)'] = 'admin/C_karya/data/$1';
$route['admin/karya/getkarya'] = 'admin/C_karya/getkarya';
$route['admin/karya/getPublikasi'] = 'admin/C_karya/getPublikasi';
$route['admin/karya/getSubjek'] = 'admin/C_karya/getSubjek';
$route['admin/karya/getSatker'] = 'admin/C_karya/getSatker';
$route['admin/karya/get/(:any)'] = 'admin/C_karya/get/$1';
$route['admin/karya/insert'] = 'admin/C_karya/insert';
$route['admin/karya/update/(:any)'] = 'admin/C_karya/update/$1';
$route['admin/karya/update/karya/(:any)'] = 'admin/C_karya/updateKarya/$1';
$route['admin/karya/delete/(:any)'] = 'admin/C_karya/delete/$1';
$route['admin/karya/set/(:any)/(:any)'] = 'admin/C_karya/set/$1/$2';

$route['admin/karya/tambah'] = 'admin/C_karya/tambah';
$route['admin/karya/konfirmasi'] = 'admin/C_karya/konfirmasi';




// Home Route
$route['karya/lihat/(:any)'] = 'C_karya/lihat/$1';
$route['karya/tag/(:any)'] = 'C_karya/tag/$1';
$route['karya/tag/(:any)/(:any)'] = 'C_karya/tag/$1/$2';
$route['karya/cari/(:any)'] = 'C_karya/cari/$1';
$route['karya/cari/(:any)/(:any)'] = 'C_karya/cari/$1/$2';
$route['karya/cari'] = 'C_karya/cari';
$route['karya'] = 'C_karya/beranda/';
$route['karya/(:any)'] = 'C_karya/beranda/$1';
$route['karya/satuan/(:any)'] = 'C_karya/satuan/$1';
$route['karya/satuan/lebih/(:any)'] = 'C_karya/satuan/';
$route['karya/(:any)/(:any)'] = 'C_karya/karyaSatuan/$1';