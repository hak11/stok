<?php


/* Kelola Pengguna*/

Breadcrumbs::register('regis-user', function($breadcrumbs)
{
    $breadcrumbs->push('Kelola Pengguna', route('regis-user'));
});


/* Dashboard*/

Breadcrumbs::register('home-index', function($breadcrumbs)
{
    $breadcrumbs->push('Dashboard', route('home-index'));
});

/* Master Barang */
Breadcrumbs::register('master-item', function($breadcrumbs)
{
    $breadcrumbs->push('Master Barang', route('master-item'));
});

Breadcrumbs::register('master-item-create', function($breadcrumbs)
{	
	$breadcrumbs->parent('master-item');
    $breadcrumbs->push('Tambah Data Master Barang', route('master-item-create'));
});

Breadcrumbs::register('master-item-edit', function($breadcrumbs)
{
    $breadcrumbs->parent('master-item');
    $breadcrumbs->push('Ubah Data Master Barang', route('master-item-edit'));
});

Breadcrumbs::register('master-item-show', function($breadcrumbs)
{
	$breadcrumbs->parent('master-item');
    $breadcrumbs->push('Show Data Master Barang', route('master-item-show'));
});

/* Master Area */
Breadcrumbs::register('master-area', function($breadcrumbs)
{
    $breadcrumbs->push('Master Area', route('master-area'));
});

Breadcrumbs::register('master-area-create', function($breadcrumbs)
{	
	$breadcrumbs->parent('master-item');
    $breadcrumbs->push('Tambah Data Master Area', route('master-area-create'));
});

Breadcrumbs::register('master-area-edit', function($breadcrumbs)
{
    $breadcrumbs->parent('master-item');
    $breadcrumbs->push('Ubah Data Master Area', route('master-area-edit'));
});

Breadcrumbs::register('master-area-show', function($breadcrumbs)
{
	$breadcrumbs->parent('master-item');
    $breadcrumbs->push('Show Data Master Area', route('master-area-show'));
});

/* Master Kategori Barang */
Breadcrumbs::register('master-kategori-barang', function($breadcrumbs)
{
    $breadcrumbs->push('Master Kategori Barang', route('master-kategori-barang'));
});

Breadcrumbs::register('master-kategori-barang-create', function($breadcrumbs)
{   
    $breadcrumbs->parent('master-item');
    $breadcrumbs->push('Tambah Data Master Kategori Barang', route('master-kategori-barang-create'));
});

Breadcrumbs::register('master-kategori-barang-edit', function($breadcrumbs)
{
    $breadcrumbs->parent('master-item');
    $breadcrumbs->push('Ubah Data Master Kategori Barang', route('master-kategori-barang-edit'));
});

Breadcrumbs::register('master-kategori-barang-show', function($breadcrumbs)
{
    $breadcrumbs->parent('master-item');
    $breadcrumbs->push('Show Data Master Kategori Barang', route('master-kategori-barang-show'));
});
?>