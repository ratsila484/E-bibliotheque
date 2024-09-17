<?php
namespace App\Models;
use CodeIgniter\Model;

class AdminModel extends Model
{
    protected $table = 'user';
    protected $primarykey = 'id';
    protected $allowedFields = ['username', 'password'];
    
}

?>