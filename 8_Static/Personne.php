<?php

class Personne {
    // --- PROPRIÉTÉ STATIQUE ---
    /**
     * Un compteur qui appartient à la CLASSE Personne.
     * Il est 'private' pour respecter l'encapsulation.
     * Il est partagé par toutes les instances de Personne et de ses enfants.
     * @var int
     */
    private static int $compteurPersonnes = 0;

    protected $nom;
    protected $prenom;

    public function __construct($nom, $prenom) {
        $this->nom = $nom;
        $this->prenom = $prenom;

        // À chaque fois qu'un constructeur est appelé, on incrémente le compteur de la classe.
        // On utilise `self::` pour faire référence à un membre statique de la classe actuelle.
        self::$compteurPersonnes++;
    }

    public function getNomComplet() {
        return $this->prenom . ' ' . $this->nom;
    }

    // --- MÉTHODES STATIQUES ---

    /**
     * Méthode statique pour récupérer la valeur du compteur.
     * Comme elle est 'public static', on peut l'appeler de n'importe où
     * avec Personne::getCompteur().
     */
    public static function getCompteur(): int {
        return self::$compteurPersonnes;
    }

    /**
     * Méthode statique "utilitaire".
     * Elle valide un format de numéro de téléphone. Elle n'a pas besoin de `$this`.
     * Elle est liée logiquement à une Personne, donc on la met ici.
     * 
     * @param string $telephone
     * @return bool
     */
    public static function validerTelephone(string $telephone): bool {
        // Logique de validation simple (ex: commence par 0 et a 10 chiffres)
        return preg_match('/^0[1-9]\d{8}$/', $telephone);
    }
}