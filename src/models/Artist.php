<?php 

namespace Src\Models;

use Src\DBConnection;

Class Artist extends DBConnection
{



  public function getAll(): array
    {
        $stmt = $this->pdo->query("SELECT ArtistId, Name FROM Artist");
        return $stmt->fetchAll();
    }
}