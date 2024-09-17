<?php
namespace App\Models;
use CodeIgniter\Model;

class ClientModel extends Model
{
    protected $table = 'client';
    protected $primarykey = 'id';
    protected $allowedFields = ['livre', 'nom', 'adresse', 'tel', 'date_emprunt'];
    
}

?>