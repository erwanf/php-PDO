<?php
/**
 * Created by PhpStorm.
 * User: Erwan
 * Date: 10/06/2015
 * Time: 12:05
 */

namespace Personne;


use pdo\Connexion;
use \PDO;

class PersonneDAO {

    public function insert (PersonneDTO $p){
        $sql = " INSERT INTO personne (nom_personne,prenom_personne)
                VALUES (?,?);";

        $con = new Connexion();
        $result = $con->con($sql);
        $result->bindValue(1,$p->getNom(),PDO::PARAM_STR);
        $result->bindValue(2,$p->getPrenom(),PDO::PARAM_STR);
        $result->execute();
        return $con->lastId();
    }

    public function fetchAll(){
        $sql = ("SELECT nom_personne,prenom_personne FROM personne ORDER BY personne_id");
        $con = new Connexion();
        $reslut = $con->query($sql);
        return $reslut;
    }

}