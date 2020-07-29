<?php namespace App\Models;

use CodeIgniter\Model;

class AnimalModel extends Model {

    protected $table='animales';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nombre','comida','edad'];


}