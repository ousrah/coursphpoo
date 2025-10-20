<?php
require_once 'Personne.php';
require_once 'Client.php';

echo "--- DÉMONSTRATION DES BÉNÉFICES DE PHPDOC ---<br><br>";

// === 1. Aide à l'écriture du code (Autocomplétion) ===

// Créez une instance de Client.
$client = new Client('Leroy', 'Alice', 'CLT001');

// Tapez "$client->" dans votre éditeur de code.
// Grâce au PHPDoc, l'éditeur sait que $client est un objet Client et vous proposera
// automatiquement les méthodes disponibles : getNomComplet(), getNumeroClient(), setAge(), etc.

// === 2. Informations contextuelles au survol ===

// Passez votre souris sur "getNomComplet" dans la ligne ci-dessous.
// Une infobulle devrait apparaître, affichant la description de la méthode,
// ses paramètres (@param) et ce qu'elle retourne (@return),
// exactement comme nous l'avons écrit dans Personne.php.
$nom = $client->getNomComplet();
echo "Nom complet obtenu : " . $nom . "<br>";

// === 3. Validation et détection d'erreurs ===

// Essayez d'appeler la méthode setAge avec un mauvais type de paramètre (une chaîne).
// Votre éditeur pourrait souligner l'erreur avant même l'exécution.
// $client->setAge("vingt-cinq"); // Erreur potentielle détectée par l'IDE

// Gérons l'exception documentée avec @throws.
try {
    echo "Tentative de définir un âge invalide...<br>";
    $client->setAge(-5);
} catch (\InvalidArgumentException $e) {
    // L'IDE sait que cette méthode peut lancer cette exception,
    // ce qui nous incite à utiliser un bloc try/catch.
    echo "Exception attrapée : " . $e->getMessage() . "<br>";
}

// === 4. Gérer le code obsolète (@deprecated) ===

// Essayez d'appeler la méthode getInfos().
// L'éditeur devrait la barrer ou l'afficher différemment pour vous signaler
// qu'elle est dépréciée. En la survolant, vous verrez le message
// vous conseillant d'utiliser getNomComplet() à la place.
$infosObsoletes = $client->getInfos();

echo "<br>--- FIN DE LA DÉMONSTRATION ---<br>";