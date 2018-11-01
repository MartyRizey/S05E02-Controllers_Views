<?php
// fichier point d'entré


//TODO 



// Affichage ancienne méthode non dynamique
// include __DIR__ .'/views/header.tpl.php';
// include __DIR__ .'/views/products.tpl.php'; // pour la page products
// include __DIR__ .'/views/footer.tpl.php';

// Inclusion de la class MainController
include __DIR__ . '/controllers/MainController.php';

// Méthode dynamique
// on instancie un objet de la classe 'MainController', cet objet utilisera les méthodes de cette classe.
$controller = new MainController();

// on appel ensuite la méthode home sur l'objet dans MainController.php gérant cette page
$controller->products();