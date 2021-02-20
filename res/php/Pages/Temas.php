<?php

namespace ODA\Pages;

use ODA\Modules\App\Temas as AppTemas;
use ODA\Modules\Extended;
use ODA\Modules\WebPage\Page;
use ODA\Modules\App;

/**
 * 
 */
class Temas extends Page
{

    /**
     * 
     * @param Extended $Extended
     */
    public function __construct(Extended $Extended = NULL)
    {
        parent::__construct($Extended, "Temas", "pages/Temas.twig");
    }

    public function initVars()
    {
        $Temas = new App\Temas($this->Extended());
        $Listas = $Temas->obtenerListaDeTema();

        $this->setVar('page.title', 'Pagina de Temas');
        $this->setVar('Temas', $Listas);
    }
}
