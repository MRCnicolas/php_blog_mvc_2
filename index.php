<?php

use App\Autoloader;
use App\Models\AnnoncesModel;


require_once 'Autoloader.php';
Autoloader::register();

$model = new AnnoncesModel;

$annonces = $model->find(2);

var_dump($annonces);