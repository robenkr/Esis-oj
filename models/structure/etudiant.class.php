<?php
/**
 * Created by PhpStorm.
 * User: ROBEN
 * Date: 11/04/2018
 * Time: 21:50 PM
 */

class Etudiant
{
    private $id;
    private $matricule;
    private $pwd;
    public function __construct($id, $matricule, $pwd)
    {
        $this->id = $id;
        $this->matricule = $matricule;
        $this->pwd = $pwd;
    }
    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }
    /**
     * @return mixed
     */
    public function getMatricule()
    {
        return $this->matricule;
    }
    /**
     * @return mixed
     */
    public function getPwd()
    {
        return $this->pwd;
    }
}