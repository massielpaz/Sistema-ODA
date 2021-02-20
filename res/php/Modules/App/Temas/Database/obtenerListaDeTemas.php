<?php

namespace ODA\Modules\App\Temas\Database;

use ODA\Modules\App\Temas\TemasEntry;

trait obtenerListaDeTemas
{

    public abstract function Extended();

    public function obtenerListaDeTema()
    {
        $db = $this->Extended()->Database();

        $result = [];

        $db_id = Null;
        $db_Nombre = Null;

        $stmt = $db->prepare("SELECT * FROM temas");
        $stmt->execute();
        $stmt->bind_result($db_id, $db_Nombre);
        $stmt->store_result();

        while ($stmt->fetch()) {
            $entry = new TemasEntry();

            $entry
                ->setId_tema($db_id)
                ->setNombre_tema($db_Nombre);

            $result[] = $entry;
        }

        $stmt->free_result();
        $stmt->close();

        return $result;
    }
}
