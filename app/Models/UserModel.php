<?php
namespace App\Models;
use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'livres';
    protected $primarykey = 'id';
    protected $allowedFields = ['titre', 'auteur', 'dateCreation','disponibilite'];
    
}

?>