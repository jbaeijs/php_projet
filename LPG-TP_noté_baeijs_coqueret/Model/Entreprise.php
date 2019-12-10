<?php


namespace POO\Model;

require_once("Structure.php");

/**
 * Class Entreprise
 * @package POO\Model
 */
class Entreprise extends Structure
{
    private $nombreAssociés;

    /**
     * Entreprise constructor.
     * @param string $nom
     * @param string $rue
     * @param int $codePostal
     * @param string $ville
     * @param bool $isAssociation
     * @param int $nombreAssociés
     */
    public function __construct(string $nom, string $rue, int $codePostal, string $ville, bool $isAssociation, int $nombreAssociés)
    {
        parent::__construct($nom, $rue, $codePostal, $ville, $isAssociation);
        $this->nombreAssociés = $nombreAssociés;
    }

    /**
     * @return int|int
     */
    public function getNombreAssociés()
    {
        return $this->nombreAssociés;
    }

    /**
     * @param int|int $nombreAssociés
     */
    public function setNombreAssociés(int $nombreAssociés)
    {
        $this->nombreAssociés = $nombreAssociés;
    }

    public function __toString()
    {
        return "L'entreprise ".parent::__toString()."<br/> Nombre d'associés : ".$this->getNombreAssociés()."<br/>";
    }
}