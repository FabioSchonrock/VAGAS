<?php

use app\Entity\Vaga;

require __DIR__.'/vendor/autoload.php';

//VALIDAÇÃO DO POST - SE ESSES CAMPOS ESTIVEREM PREENCHIDOS (SETADOS)
 if(isset($_POST['titulo'],$_POST['descricao'],$_POST['ativo'])){
      $obVaga = new Vaga;
      $obVaga->titulo    = $_POST['titulo'];
      $obVaga->descricao = $_POST['descricao'];
      $obVaga->ativo     = $_POST['ativo'];
      $obVaga->cadastrar();
        
                  
}

include __DIR__.'/includes/header.php';
include __DIR__.'/includes/formulario.php';
include __DIR__.'/includes/footer.php';
