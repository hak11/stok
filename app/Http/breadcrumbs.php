<?php

Breadcrumbs::register('regis-user', function($breadcrumbs)
{
    $breadcrumbs->push('Registrasi User', route('regis-user'));
});

Breadcrumbs::register('home-index', function($breadcrumbs)
{
    $breadcrumbs->push('Dashboard', route('home-index'));
});

Breadcrumbs::register('area-ganteng', function($breadcrumbs)
{
    $breadcrumbs->push('Area Ganteng', route('area-ganteng'));
});

?>