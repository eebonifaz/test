<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $fillable = [
        'cuenta'
    ];
    public function invoces()
    {
        return $this->hasMany(Invoce::class);
    }
    public function comprobantes()
    {
        return $this->hasMany(Comprobante::class);
    }
}
