<?php 
namespace App\Models;
use CodeIgniter\Model;

class Contact extends Model
{
    protected $table = 'contact';
    protected $primaryKey = 'id';
    protected $allowedFields = ['name', 'email', 'phone', 'message'];
    protected $createdField = 'create_at';
}