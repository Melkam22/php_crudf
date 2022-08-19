<?php
 
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    
    use HasFactory;

    protected $table = 'php_cars';
    protected $primaryKey = 'id';
    public $timestamps = true;
    protected $dateFormat = ('h:m:s');
    protected $fillable = [
        'image_path',
        'model',
        'production_year',
        'price',
        'description'
    ];

}
