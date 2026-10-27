<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Categoria extends Model
{
<<<<<<< HEAD
    protected $fillable = [
        'nombre',
        'descripcion'
    ];
    
=======

protected $fillable = [
 'nombre',
 'descripcion'
 ];
 
>>>>>>> e77b7be8b63c743d78991f74e11d2a1588823968
    public function ideas(): HasMany
    {
        return $this->hasMany(Idea::class);
    }
}
