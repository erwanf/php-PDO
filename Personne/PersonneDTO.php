<?php
/**
 * Created by PhpStorm.
 * User: Erwan
 * Date: 10/06/2015
 * Time: 12:06
 */

namespace Personne;


class PersonneDTO {

    private $nom;
    private $prenom;
    private $adresse;
    private $date;

    /**
     * @param $nom
     * @param $prenom
     */
    public function __construct($nom="null", $prenom="null")
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
    }

    /**
     * @param $donnees tableau assocatif key = l'attribut et value = la valeur de l'attribut
     */
    public function hydrate($donnees){
        foreach ($donnees as $key => $value){
            // On récupère le nom du setter correspondant à l'attribut.
            $method = 'set'.ucfirst($key);

            // Si le setter correspondant existe.
            if (method_exists($this, $method)) {
                // On appelle le setter.
                $this->$method($value);
            }
        }
    }

    /**
     * @return mixed
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param mixed $nom
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    /**
     * @return mixed
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * @param mixed $prenom
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }

    /**
     * @return mixed
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * @param mixed $adresse
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;
    }

    /**
     * @return mixed
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param mixed $date
     */
    public function setDate($date)
    {
        $this->date = $date;
    }


}