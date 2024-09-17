<?php
namespace App\Models;
use CodeIgniter\Model;

class CleanClientModel extends Model
{
    protected $table = 'clientclean';
    protected $primarykey = 'id';
    protected $allowedFields = ['nom', 'livre', 'date'];
    
}

?>