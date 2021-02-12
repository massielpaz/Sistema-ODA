<?php

namespace ODA\Pages;

use ODA\Modules\Extended;
use ODA\Modules\WebPage\Page;

/**
 * 
 */
class karen extends Page {

    /**
     * 
     * @param Extended $Extended
     */
    public function __construct(Extended $Extended = NULL) {
        parent::__construct($Extended, "Home", "pages/karen.twig");
    }

    public function initVars() {
        $this->setVar('page.title', 'Pagina de karen');

        $this->setVar('nombre', 'Massiel');
        $this->setVar('gusto', 'Mishis');
    }

}
