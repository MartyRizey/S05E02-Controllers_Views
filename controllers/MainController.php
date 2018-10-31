<?php
// video matin 2 : 1:10:00

// Je déclare ma classe MainController.
// Un Controller est une classe permettant de regrouper les méthodes gérant le code de chaque page.
// => 1 page => 1 méthode de controller
class MainController
{
    // Méthode gérant le code de la page d'accueil
    public function home ()
    {
        // ici la ligne générera une erreur quand on voudra afficher dans index.tpl.php $toto. La méthode 'show' ne connait pas cette variable.
        $toto = 'taratata';
        // J'appelle la méthode 'show' sur l'objet courant avec $this. Le 2iè argument est optionnel, car dans le paramètre de la méthode appelée on lui donne une valeur par défaut.
        $this->show('index');
    }

    // Méthode gérant le code de la page 'about'
    public function about()
    {

    }

    // Méthode gérant le code de la page 'products'
    public function products()
    {

    }   

    // Méthode gérant le code de la page 'store'
    public function store()
    {

    }

    // video matin 2 : 1:16:00
    // Méthode s'occupant d'afficher une template (+ header et footer)
    // Le 1er paramètre '$viewName' de la méthode show correspond à la vue qui va transiter ex : home, quand on va appeler la méthode en lui passanr un argument.
    public function show($viewName, $viewVars=array()) {
        // $viewVars est disponible dans chaque fichier de vue
        include __DIR__.'/../views/header.tpl.php';
        include __DIR__.'/../views/'.$viewName.'.tpl.php';
        include __DIR__.'/../views/footer.tpl.php';
      }

}