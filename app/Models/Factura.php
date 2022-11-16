<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Factura extends Model
{
    use HasFactory;

    /**@var array<int, string>*/
    protected $fillable = [
        'user_id',
        'sub_total',
        'impuestos_total',
    ];

    public function productos()
    {
        return $this->belongsToMany(Producto::class, 'compras');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
