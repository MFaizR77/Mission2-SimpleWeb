<?php

namespace App\Models;

use CodeIgniter\Model;

class MahasiswaModels extends Model
{
    protected $table = "mahasiswas";

    public function getMahasiswa(){

        $db = \config\Database::connect();
        $query = $db->query("SELECT * FROM mahasiswas");
        return $query->getResultArray();
    }
}