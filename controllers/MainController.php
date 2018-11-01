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
        $toto = 'taratata';
        // J'appelle la méthode 'show' sur l'objet courant avec $this. Le 2iè argument est optionnel, car dans le paramètre de la méthode appelée on lui donne une valeur par défaut.
        // Si je veux passer quelque chose à la méthode 'show' pour l'afficher, je peux utiliser un deuxième argument dans l'appel de la méthode. Puisque j'ai la possibilité que la méthode appelée est 2 paramètres. Je passe donc à $viewVars un tableau associatif.
        // Délégue l'affichage à la méthode "show" du MainController"
        $this->show('index', ['toto' => $toto]);
    }

    // Méthode gérant le code de la page 'about'
    public function about()
    {
        // Délégue l'affichage à la méthode "show" du MainController"
        $this->show('about');
    }

    // Méthode gérant le code de la page 'products'
    public function products()
    {
        // Délégue l'affichage à la méthode "show" du MainController"
        $this->show('products');
    }   

    // Méthode gérant le code de la page 'store'
    public function store()
    {
        // Délégue l'affichage à la méthode "show" du MainController"
        $this->show('store');
    }

    // video matin 2 : 1:16:00
    // Méthode s'occupant d'afficher une template (+ header et footer)
    // celle-ci sera passée en 'private' car elle ne sera appelée qu'en interne, dans la classe du controller
    // Le 1er paramètre '$viewName' de la méthode show correspond à la vue qui va transiter ex : home, quand on va appeler la méthode en lui passanr un argument.
    private function show($viewName, $viewVars=array()) 
    {
        // le 2iè paramètre $viewVars récupère la valeur du 2iè argument de l'appel de la méthode, à savoir la valeur de $toto à la clé 'toto' du tableau associatif.
        // $viewVars est disponible dans chaque fichier de vue
        include __DIR__.'/../views/header.tpl.php';
        include __DIR__.'/../views/'.$viewName.'.tpl.php';
        include __DIR__.'/../views/footer.tpl.php';
      }

}