<?php
// Dans un vrai projet, un autoloader gérerait les inclusions.
require_once 'Personne.php';
require_once 'Client.php';
require_once 'Fournisseur.php';

echo "--- DÉMONSTRATION DES PROPRIÉTÉS ET MÉTHODES STATIQUES ---<br><br>";

// === 1. Accès AVANT toute instanciation ===

echo "1. Test de la méthode utilitaire statique :<br>";
$telephoneValide = "0612345678";
$telephoneInvalide = "123-456";

// On appelle la méthode statique directement sur la classe, SANS créer d'objet.
$estValide = Personne::validerTelephone($telephoneValide);
echo "Le numéro '{$telephoneValide}' est " . ($estValide ? "valide." : "invalide.") . "<br>"; // Affiche "valide."

$estValide = Personne::validerTelephone($telephoneInvalide);
echo "Le numéro '{$telephoneInvalide}' est " . ($estValide ? "valide." : "invalide.") . "<br><br>"; // Affiche "invalide."


echo "2. Compteur de personnes avant la création d'objets :<br>";
// On peut aussi accéder au compteur avant même qu'un seul objet n'existe.
echo "Nombre total de personnes créées : " . Personne::getCompteur() . "<br><br>"; // Affiche 0


// === 2. Création d'instances ===

echo "3. Création de plusieurs instances (Client et Fournisseur)...<br>";
$client1 = new Client('Leroy', 'Alice', 'CLT001');
$fournisseur1 = new Fournisseur('Garnier', 'Paul', 'Pièces Auto Pro');
$client2 = new Client('Martin', 'Bob', 'CLT002');
echo "Trois objets ont été créés.<br><br>";


// === 3. Vérification du compteur après instanciation ===

echo "4. Compteur après la création des objets :<br>";
// La propriété statique a été incrémentée 3 fois via les constructeurs.
echo "Nombre total de personnes créées : " . Personne::getCompteur() . "<br><br>"; // Affiche 3


// === 4. Accès via une classe enfant ===

echo "5. Accès au compteur via une classe enfant :<br>";
// Les membres statiques sont aussi hérités. On peut donc y accéder via les classes enfants.
// Cela pointe toujours vers la MÊME et UNIQUE propriété statique de la classe Personne.
echo "Nombre total (vu depuis Client) : " . Client::getCompteur() . "<br>"; // Affiche 3
echo "Nombre total (vu depuis Fournisseur) : " . Fournisseur::getCompteur() . "<br>"; // Affiche 3

echo "<br>--- FIN DE LA DÉMONSTRATION ---<br>";

?>