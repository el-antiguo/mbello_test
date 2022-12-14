<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    /**@var array<int, string>*/
    protected $fillable = [
        'nombre',
        'precio',
        'impuesto',
    ];

    protected $casts = [
        'precio' => 'float',
        'impuesto' => 'float',
    ];

    public function compras()
    {
        return $this->hasMany(Compra::class);
    }
}
