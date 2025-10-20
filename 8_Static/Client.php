<?php
// On inclut le fichier de la classe parente pour que PHP sache ce que "extends Personne" signifie.
require_once 'Personne.php';

/**
 * La classe Client hérite de la classe Personne.
 * 
 * Elle récupère toutes les propriétés et méthodes publiques et protégées de Personne.
 * Elle ajoute ses propres propriétés et méthodes pour se spécialiser.
 */
class Client extends Personne
{
    /**
     * Propriété spécifique à la classe Client.
     * Elle est 'private' car elle ne concerne que le Client et pas d'éventuels
     * enfants de la classe Client.
     * @var string
     */
    private string $numeroClient;

    /**
     * Le constructeur de la classe enfant.
     * 
     * @param string $nom Le nom du client.
     * @param string $prenom Le prénom du client.
     * @param string $numeroClient Le numéro unique du client.
     */
    public function __construct(string $nom, string $prenom, string $numeroClient)
    {
        // === ÉTAPE CRUCIALE DE L'HÉRITAGE ===
        // On doit appeler le constructeur de la classe parente (Personne)
        // pour qu'il puisse initialiser les propriétés qu'il gère ($nom, $prenom)
        // et exécuter sa propre logique (comme incrémenter le compteur statique).
        parent::__construct($nom, $prenom);

        // On initialise ensuite la propriété spécifique à cette classe.
        $this->numeroClient = $numeroClient;
    }

    /**
     * Une méthode spécifique à la classe Client pour obtenir le numéro de client.
     * C'est un "getter" classique.
     *
     * @return string
     */
    public function getNumeroClient(): string
    {
        return $this->numeroClient;
    }

    /**
     * Méthode de démonstration du polymorphisme.
     * Redéfinit une méthode potentielle du parent pour donner une information plus complète.
     *
     * @return string
     */
    public function getProfilDetails(): string
    {
        // On réutilise la méthode getNomComplet() héritée du parent.
        return "Profil Client : " . $this->getNomComplet() . " (Numéro: {$this->numeroClient})";
    }
}