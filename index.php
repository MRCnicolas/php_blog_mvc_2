<?php

use App\Autoloader;
use App\Models\AnnoncesModel;


require_once 'Autoloader.php';
Autoloader::register();

$model = new AnnoncesModel;

$donnees = [
    'titre' => 'Annonce hydratée',
    'description' => 'Description de l\'annonce hydratée',
    'actif' => 0
];

$annonce = $model->hydrate($donnees);

$model->create($annonce);

var_dump($annonce);