<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarModel extends Model
{
    use HasFactory;

    protected $table = 'cars';
    protected $primaryKey = 'id';

    protected $fillable = [
        'id', 
        'nama_mobil', 
        'slug', 
        'type_id', 
        'price', 
        'pintu', 
        'penumpang', 
        'description', 
        'image', 
        'status', 
        'created_at',
        'updated_at',
    ];

    

    
}