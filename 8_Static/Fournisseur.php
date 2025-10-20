<?php
require_once 'Personne.php';

/**
 * La classe Fournisseur hérite également de la classe Personne.
 * 
 * Tout comme Client, elle bénéficie du code de Personne et y ajoute
 * ses propres spécificités.
 */
class Fournisseur extends Personne
{
    /**
     * Propriété spécifique à la classe Fournisseur.
     * @var string
     */
    private string $nomSociete;

    /**
     * Le constructeur de la classe Fournisseur.
     *
     * @param string $nom Le nom du contact chez le fournisseur.
     * @param string $prenom Le prénom du contact.
     * @param string $nomSociete Le nom de la société du fournisseur.
     */
    public function __construct(string $nom, string $prenom, string $nomSociete)
    {
        // On appelle également le constructeur de la classe parente (Personne).
        parent::__construct($nom, $prenom);

        // Et on initialise la propriété de cette classe.
        $this->nomSociete = $nomSociete;
    }

    /**
     * Getter pour la propriété spécifique du Fournisseur.
     *
     * @return string
     */
    public function getNomSociete(): string
    {
        return $this->nomSociete;
    }

    /**
     * Implémentation de la méthode pour le polymorphisme, spécifique au Fournisseur.
     * Elle a le même nom que dans la classe Client, mais son comportement est différent.
     *
     * @return string
     */
    public function getProfilDetails(): string
    {
        return "Profil Fournisseur : " . $this->getNomComplet() . " (Société: {$this->nomSociete})";
    }
}