<?php
/**
 * Created by PhpStorm.
 * User: Erwan
 * Date: 10/06/2015
 * Time: 11:44
 */
namespace pdo;

use \PDO;
class Connexion {

    private $pdo;

    public function __construct()
    {
        try {
            $host = '127.0.0.1';
            $port = '3306';
            $db = 'personne';
            $user = 'root';
            $password = '';

            $this->pdo = new PDO(
                'mysql:host='.$host.';dbname='.$db.';port='.$port,
                $user,
                $password,
                array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)
            );
        }
        catch(\Exception $e){
            echo "j'ai codé comme un pied, la preuve : ".$e->getMessage();
            die();
        }
    }
    public function con($sql){
        return $this->pdo->prepare($sql);
    }
    public function query($sql){
        return $this->pdo->query($sql);
    }
    public function lastId(){
       return $this->pdo->lastInsertId();
    }

}