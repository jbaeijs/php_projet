<?php
namespace POO\Model;

require_once('Secteur.php');

/**
 * Class Structure
 * @package POO\Model
 */
class Structure
{
    // Nom de la structure
    private $nom;

    // Données géographiques
    private $rue;
    private $codePostal;
    private $ville;

    // Booléen pour la nature de la strcture
    private $isAssociation;


    /**
     * Structure constructor.
     * @param string $nom
     * @param string $rue
     * @param int $codePostal
     * @param string $ville
     * @param boolean $isAssociation
     */
    public function __construct(string $nom, string $rue, int $codePostal, string $ville, bool $isAssociation)
    {
        $this->nom = $nom;
        $this->rue = $rue;
        $this->codePostal = $codePostal;
        $this->ville = $ville;
        $this->isAssociation = $isAssociation;
    }

    /**
     * @return string|string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param string|string $nom
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    /**
     * @return string|string
     */
    public function getRue()
    {
        return $this->rue;
    }

    /**
     * @param string|string $rue
     */
    public function setRue($rue)
    {
        $this->rue = $rue;
    }

    /**
     * @return int|int
     */
    public function getCodePostal()
    {
        return $this->codePostal;
    }

    /**
     * @param int|int $codePostal
     */
    public function setCodePostal($codePostal)
    {
        $this->codePostal = $codePostal;
    }

    /**
     * @return string|string
     */
    public function getVille()
    {
        return $this->ville;
    }

    /**
     * @param string|string $ville
     */
    public function setVille($ville)
    {
        $this->ville = $ville;
    }

    /**
     * @return bool|boolean
     */
    public function getIsAssociation()
    {
        return $this->isAssociation;
    }

    /**
     * @param bool|boolean $isAssociation
     */
    public function setIsAssociation($isAssociation)
    {
        $this->isAssociation = $isAssociation;
    }

    public function __toString()
    {
        return $this->getNom()."<br/>Adresse : <br/>".$this->getRue()."<br/>".$this->getCodePostal()."<br/>".$this->getVille();
    }
}