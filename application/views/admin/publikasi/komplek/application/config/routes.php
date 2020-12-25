<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'C_home/index';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['home']	= 'C_home/index';
$route['about'] = 'C_home/about';
$route['galery']= 'C_home/galery';
$route['galeri/rumah']= 'C_home/galeryRumah';
$route['agent']	= 'C_home/agent';

// Admin
$route['admin']	= 'admin/C_admin';
$route['admin/dashboard']	= 'admin/C_admin';


// tim
$route['admin/tim']    = 'admin/C_admin';
$route['admin/tim/edit/(:any)']    = 'admin/C_admin';
$route['admin/tim/aksi/edit/(:any)']    = 'admin/C_admin';
$route['admin/tim/aksi/hapus/(:any)']    = 'admin/C_admin';

// Kategori
$route['admin/kategori']	= 'admin/C_kategori';
$route['admin/kategori/tambah']	= 'admin/C_kategori/tambah';
$route['admin/kategori/edit/(:any)']	= 'admin/C_kategori/edit/$1';
$route['admin/kategori/aksi/edit/(:any)']	= 'admin/C_kategori/aksiEdit/$1';
$route['admin/kategori/aksi/hapus/(:any)']	= 'admin/C_kategori/aksiHapus/$1';

// Konten Galeri
$route['admin/konten']    = 'admin/C_admin';
$route['admin/konten/edit/(:any)']    = 'admin/C_admin';
$route['admin/konten/aksi/edit/(:any)']    = 'admin/C_admin';
$route['admin/konten/aksi/hapus/(:any)']    = 'admin/C_admin';

// Unit
$route['admin/unit']	= 'admin/C_unit';
$route['admin/unit/edit/(:any)']	= 'admin/C_unit/aksiEdit/$1';
$route['admin/unit/aksi/edit/(:any)']	= 'admin/C_unit/aksiSimpan/$1';

// Login
$route['admin/login']	= 'C_login';
$route['admin/login/aksi']	= 'C_login/aksi';