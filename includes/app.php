<?php 

require 'funciones.php';
require 'config/database.php';
require __DIR__.'/../vendor/autoload.php';
include 'config/databasePDO.php';

$db = conectarDB();

use App\ActiveRecord;

ActiveRecord::setDB($db);