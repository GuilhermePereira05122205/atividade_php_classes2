<?php

use ProjetoPhp\Models\Login;

require_once "vendor/autoload.php";


$login = new Login();
$login->executar('eu','123');