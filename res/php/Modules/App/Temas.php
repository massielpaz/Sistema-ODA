<?php

namespace ODA\Modules\App;

use ODA\Modules\Extended;
use ODA\Modules\Extended\ExtendedExtended;

use ODA\Modules\App\Temas\Database;

class Temas extends ExtendedExtended
{
    use Database\obtenerListaDeTemas;

    /**
     * 
     * @param Extended $Extended
     */
    public function __construct(Extended $Extended = NULL)
    {
        parent::__construct($Extended);
    }
}
