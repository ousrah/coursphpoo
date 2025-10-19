# Cours de Programmation Orientée Objet (POO) en PHP

Bienvenue dans ce cours d'introduction à la Programmation Orientée Objet (POO) avec PHP 7 et 8. Ce dépôt est spécialement conçu pour les étudiants débutant en POO et propose une approche progressive, concept par concept.

Chaque dossier numéroté représente une étape d'apprentissage. À l'intérieur de chaque dossier, vous trouverez :
*   Les fichiers PHP contenant les classes (`Personne.php`, `Client.php`, etc.).
*   Un fichier `Test.php` qui montre comment utiliser les classes et les concepts de la leçon.

## Comment Utiliser ce Dépôt

1.  **Clonez le projet** sur votre machine locale.
2.  **Naviguez dans un dossier de leçon** en ligne de commande (par exemple : `cd 1_Classe_et_Constructeur`).
3.  **Exécutez le fichier de test** pour voir le résultat (par exemple : `php Test.php`).
4.  **Lisez les commentaires** dans les fichiers de code pour comprendre chaque ligne et chaque concept.
5.  N'hésitez pas à modifier le code pour expérimenter !

---

## Structure et Progression du Cours

### 1. La Classe et le Constructeur (Dossier: `1_Constructeur`)
*   **Qu'est-ce que c'est ?** Le point de départ absolu. On apprend à définir un "moule" (une `classe`) pour créer des objets. Le constructeur est la méthode spéciale qui initialise l'objet lors de sa création.
*   **Dans ce dossier :** Création d'une classe `Personne` très simple avec des propriétés `public` et un constructeur pour leur assigner des valeurs.
*   **Concepts clés :** `class`, `public`, `__construct`, `new`, `$this`.

### 2. L'Encapsulation (Getters/Setters) (Dossier: `2_Encapsulation`)
*   **Qu'est-ce que c'est ?** Un principe fondamental de la POO qui consiste à protéger les données d'un objet. On restreint l'accès direct aux propriétés et on force le passage par des méthodes de contrôle (accesseurs).
*   **Dans ce dossier :** On transforme les propriétés `public` en `private` et on introduit les `getters` (pour lire) et les `setters` (pour écrire) afin de contrôler l'accès aux données.
*   **Concepts clés :** `private`, méthodes `get...()`, `set...()`.


### 3. La Surcharge (Overloading simulée) (Dossier: `3_Overloading`)
*   **Qu'est-ce que c'est ?** La capacité d'une méthode à se comporter différemment selon le nombre ou le type d'arguments qu'on lui passe. PHP ne le supporte pas nativement, mais on peut le simuler.
*   **Dans ce dossier :** On crée une méthode qui utilise des arguments optionnels pour avoir un comportement différent si elle est appelée avec ou sans paramètre.
*   **Concepts clés :** Arguments avec valeur par défaut.

### 6. La Redéfinition (Overriding) (Dossier: `4_Overriding`)
*   **Qu'est-ce que c'est ?** Le mécanisme qui rend le polymorphisme possible. Il s'agit pour une classe enfant de fournir sa propre implémentation d'une méthode qui existe déjà dans son parent.
*   **Dans ce dossier :** La classe `Client` redéfinit une méthode de la classe `Personne` pour afficher un message plus spécifique.
*   **Concepts clés :** Redéfinition de méthode, `parent::`.


### 5. L'Héritage (Dossier: `5_Heritage`)
*   **Qu'est-ce que c'est ?** Un mécanisme qui permet à une classe (enfant) de récupérer les propriétés et méthodes d'une autre classe (parent). Cela favorise la réutilisation du code.
*   **Dans ce dossier :** Création d'une classe `Client` qui hérite de `Personne`, ajoutant ainsi des fonctionnalités spécifiques sans réécrire le code commun.
*   **Concepts clés :** `extends`, `parent`, classe enfant/parent.

### 6. La Visibilité `protected` (Dossier: `6_Protected`)
*   **Qu'est-ce que c'est ?** Un niveau de visibilité intermédiaire entre `public` et `private`. Une propriété ou méthode `protected` est accessible par la classe elle-même et par ses classes enfants, mais pas depuis l'extérieur.
*   **Dans ce dossier :** On modifie les propriétés de `Personne` en `protected` pour montrer comment la classe `Client` peut y accéder directement, tout en les gardant protégées de l'extérieur.
*   **Concepts clés :** `protected`.

### 7. Le Polymorphisme (Dossier: `7_Polymorphisme`)
*   **Qu'est-ce que c'est ?** Le concept selon lequel des objets de classes différentes (mais liées par héritage) peuvent répondre au même message (appel de méthode) de manières différentes. C'est la capacité d'un objet à prendre "plusieurs formes".
*   **Dans ce dossier :** On crée une classe `Fournisseur` qui hérite aussi de `Personne`. On montre qu'en appelant la même méthode sur des objets `Client` et `Fournisseur`, on obtient des résultats différents et adaptés.


### 8. Les Classes Abstraites (Dossier: `8_Abstrait`)
*   **Qu'est-ce que c'est ?** Une classe "modèle" qui ne peut pas être instanciée. Elle sert de base à d'autres classes et peut forcer ses enfants à implémenter certaines méthodes (méthodes abstraites).
*   **Dans ce dossier :** `Personne` devient une classe abstraite, car une "Personne" seule n'a pas de sens dans notre application ; c'est toujours un `Client` ou un `Fournisseur`.
*   **Concepts clés :** `abstract class`, `abstract function`.

### 9. Les Interfaces (Dossier: `9_Interfaces`)
*   **Qu'est-ce que c'est ?** Un contrat qui définit un ensemble de méthodes qu'une classe doit obligatoirement implémenter. Une classe peut implémenter plusieurs interfaces, ce qui permet une sorte d'héritage multiple de comportements.
*   **Dans ce dossier :** On crée des interfaces `Invitable` et `Validable` pour garantir que certaines classes auront les méthodes nécessaires pour ces actions, peu importe leur type.
*   **Concepts clés :** `interface`, `implements`.

### 10. Les Traits (Dossier: `10_Traits`)
*   **Qu'est-ce que c'est ?** Un mécanisme pour réutiliser du code horizontalement. Un Trait est un groupe de méthodes que l'on peut "importer" dans n'importe quelle classe, sans passer par l'héritage.
*   **Dans ce dossier :** On crée un trait `Adressable` pour ajouter la gestion d'une adresse postale à la fois à `Client` et `Fournisseur`, sans dupliquer de code.
*   **Concepts clés :** `trait`, `use`.


### 11. Les Design Patterns (Dossiers: `11_Singleton` & `12_Factory`)
*   **Qu'est-ce que c'est ?** Des solutions éprouvées à des problèmes de conception courants en développement logiciel.
*   **Dans ces dossiers :**
    *   **Singleton (`11_Singleton`) :** Assure qu'une classe n'a qu'une seule et unique instance dans toute l'application (ex: une connexion à la base de données ou un gestionnaire centralisé).
    *   **Factory (`12_Factory`) :** Centralise la logique de création d'objets. Au lieu de `new Client()` ou `new Fournisseur()`, on demande à une "fabrique" de nous créer l'objet adéquat.
*   **Concepts clés :** `static`, `self::`, `instance`, découplage.