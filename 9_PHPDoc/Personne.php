<?php

/**
 * Fichier contenant la classe de base pour toutes les personnes du système.
 *
 * @author Rahmouni Oussama
 * @version 1.0.0
 * @package CoursPOO
 */

/**
 * Représente une personne générique dans le système.
 *
 * Cette classe sert de modèle de base pour des entités plus spécifiques comme
 * Client ou Fournisseur. Elle gère les informations communes et un compteur global.
 *
 * @link https://github.com/ousrah/coursphpoo Le dépôt GitHub du cours.
 */
class Personne
{
    /**
     * Compteur global pour toutes les instances de Personne et ses enfants.
     * @var int
     */
    private static int $compteurPersonnes = 0;

    /**
     * Le nom de famille de la personne.
     * @var string
     */
    protected string $nom;

    /**
     * Le prénom de la personne.
     * @var string
     */
    protected string $prenom;

    /**
     * Constructeur de la classe Personne.
     *
     * Initialise les propriétés de l'objet et incrémente le compteur statique.
     *
     * @param string $nom Le nom de famille de la personne.
     * @param string $prenom Le prénom de la personne.
     */
    public function __construct(string $nom, string $prenom)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        self::$compteurPersonnes++;
    }

    /**
     * Retourne le nom complet de la personne.
     *
     * Concatène le prénom et le nom pour un affichage formaté.
     *
     * @return string Le nom complet (ex: "Alice Leroy").
     */
    public function getNomComplet(): string
    {
        return $this->prenom . ' ' . $this->nom;
    }

    /**
     * Modifie l'âge de la personne.
     *
     * Cette méthode lève une exception si l'âge fourni est invalide.
     *
     * @param int $age L'âge de la personne (doit être positif).
     * @throws \InvalidArgumentException Si l'âge est négatif.
     */
    public function setAge(int $age): void
    {
        if ($age < 0) {
            throw new \InvalidArgumentException("L'âge ne peut pas être négatif.");
        }
        // Logique pour stocker l'âge...
    }

    /**
     * Récupère le nombre total de personnes instanciées.
     *
     * @return int Le nombre total d'instances créées.
     */
    public static function getCompteur(): int
    {
        return self::$compteurPersonnes;
    }
    
    /**
     * Ancienne méthode pour obtenir les informations.
     *
     * @deprecated 1.1.0 Cette méthode est obsolète. Veuillez utiliser getNomComplet() à la place.
     * @see self::getNomComplet() Pour la méthode de remplacement.
     * @return string
     */
    public function getInfos(): string
    {
        return $this->getNomComplet();
    }
}