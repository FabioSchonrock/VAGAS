<?php

namespace app\Db;

use \PDO;
use \PDOException;

class database{
    
    /* 
    Host de conexão com o banco de dados
    @var string
     */
    const HOST = 'localhost';
    
    /* 
    Nome do banco de dados
    @var string
     */
    const NAME = 'wdev_vagas';
    
    /* 
    Usuário do banco de dados
    @var string
    */
    const USER = 'root';

    /* 
    Senha de acesso ao BD
    @var string
    */
    const PASS = '123456';

    /* 
    Nome da tabela a ser manipulada
    @var string
     */
    private $table;

    /* 
    Instância de conexão com o BD
    @var PDO
     */
    private $conection;

    /* 
    Define a tabela e instancia a conexão
    @param string
    */
    public function __construct($table = null){
        $this->table = $table;
        $this->setConnection();
    }

    /* 
    Método responsável por criar uma conexão com o BD
    */

    private function setConnection(){
        try{
            $this->conection = new PDO('mysql:host='.self::HOST.';dbname='.self::NAME,self::USER,self::PASS);
            $this->conection->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

        }catch(PDOException $e){
            die('ERROR: '.$e->getMessage());

        } 

    }          
           
    }
 