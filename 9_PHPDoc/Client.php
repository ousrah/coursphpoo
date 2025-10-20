<?php
require_once 'Personne.php';

/**
 * Représente un Client, qui est une spécialisation de Personne.
 *
 * @package CoursPOO
 */
class Client extends Personne
{
    /**
     * Le numéro de client unique.
     * @var string
     */
    private string $numeroClient;

    /**
     * Constructeur de la classe Client.
     *
     * @param string $nom Le nom de famille du client.
     * @param string $prenom Le prénom du client.
     * @param string $numeroClient Le numéro unique du client.
     */
    public function __construct(string $nom, string $prenom, string $numeroClient)
    {
        parent::__construct($nom, $prenom);
        $this->numeroClient = $numeroClient;
    }

    /**
     * Récupère le numéro de client.
     *
     * @return string
     */
    public function getNumeroClient(): string
    {
        return $this->numeroClient;
    }

     /**
     * Implémentation OBLIGATOIRE de la méthode abstraite de la classe Personne.
     * 
     * Fournit les détails spécifiques au profil d'un client.
     *
     * @return string
     */
    public function getProfilDetails(): string
    {
        return "Profil Client : " . $this->getNomComplet() . " (Numéro: {$this->numeroClient})";
    }
}