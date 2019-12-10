<?php


namespace POO\Model;

require_once("Structure.php");

/**
 * Class Association
 * @package POO\Model
 */
class Association extends Structure
{

    private $nombreDonateurs;

    /**
     * Association constructor.
     * @param string $nom
     * @param string $rue
     * @param int $codePostal
     * @param string $ville
     * @param boolean $isAssociation
     * @param int $nombreDonateurs
     */
    public function __construct(string $nom, string $rue, int $codePostal, string $ville, bool $isAssociation, int $nombreDonateurs)
    {
        parent::__construct($nom, $rue, $codePostal, $ville, $isAssociation);
        $this->nombreDonateurs = $nombreDonateurs;
    }

    /**
     * @return int|int
     */
    public function getNombreDonateurs()
    {
        return $this->nombreDonateurs;
    }

    /**
     * @param int|int $nombreDonateurs
     */
    public function setNombreDonateurs($nombreDonateurs)
    {
        $this->nombreDonateurs = $nombreDonateurs;
    }

    public function __toString()
    {
        return "L'association ".parent::__toString()."<br/>Nombre de donateurs : ".$this->getNombreDonateurs()."<br/>";
    }
}