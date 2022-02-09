<?php

//mysqli_report(MYSQLI_REPORT_STRICT);


define('HOST', '127.0.0.1');
define('USUARIO', 'root');
define('SENHA', '123456');
define('DB', 'login');

$conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die ('Não foi possível conectar!');

// if($conexao){
//     print "gordox";
// }


// <?php

// // Require Composer's autoloader.
// require 'vendor/autoload.php';
 
// // Using Medoo namespace.
// use Medoo\Medoo;
 
// // Connect the database.
// $database = new Medoo([
//     'type' => 'mysql',
//     'host' => '127.0.0.1',
//     'database' => 'login',
//     'username' => 'root',
//     'password' => '123456'
// ]);
 
// $data = $database->select('usuario', [
//     'nome', 'id'
// ]);

// $data = $database->insert(USUARIO)
 
// echo json_encode($data);