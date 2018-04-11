<?php
/**
 * Created by PhpStorm.
 * User: ROBEN
 * Date: 11/04/2018
 * Time: 21:54 PM
 */

class Publication
{
    private $id;
    private $idEtudiant;
    private $contenu;
    private $date;
    private $nblike;
    private $nbdislike;
    public function __construct($id, $idEtudiant, $contenu, $date, $nblike, $nbdislike) {
        $this->id = $id;
        $this->idEtudiant = $idEtudiant;
        $this->contenu = $contenu;
        $this->date = $date;
        $this->nblike = $nblike;
        $this->nbdislike = $nbdislike;
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
    public function getIdEtudiant()
    {
        return $this->idEtudiant;
    }
    /**
     * @return mixed
     */
    public function getContenu()
    {
        return $this->contenu;
    }
    /**
     * @return mixed
     */
    public function getDate()
    {
        return $this->date;
    }
    /**
     * @return mixed
     */
    public function getNblike()
    {
        return $this->nblike;
    }
    /**
     * @return mixed
     */
    public function getNbdislike()
    {
        return $this->nbdislike;
    }
}