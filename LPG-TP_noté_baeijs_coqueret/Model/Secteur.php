<?php


namespace POO\Model;


/**
 * Class Secteur
 * @package POO\Model
 */
class Secteur
{

    private $libelle;


    /**
     * Secteur constructor.
     * @param string $libelle
     */
    public function __construct(string $libelle)
    {
        $this->libelle = $libelle;
    }

    /**
     * @return string|string
     */
    public function getLibelle()
    {
        return $this->libelle;
    }

    /**
     * @param string|string $libelle
     */
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;
    }
}