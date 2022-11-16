<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Factura extends Model
{
    use HasFactory;

    /**@var array<int, string>*/
    protected $fillable = [
        'sub_total',
        'impuestos_total',
    ];

    public function compras()
    {
        return $this->hasMany(Compra::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
