<?php
 
namespace App\Models;
 
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
 
class Topping extends Model
{
    use HasFactory;

    public function producto(){
        return $this->hasMany(product::class, 'nombre');
    }
 
    protected $fillable = [
        'nombre',
        'descripcion'
    ];
}
