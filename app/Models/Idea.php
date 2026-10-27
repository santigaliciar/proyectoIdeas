<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
<<<<<<< HEAD
use Illuminate\Database\Eloquent\SoftDeletes;

class Idea extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'titulo',
        'descripcion',
        'estado',
        'autor',
        'categoria_id',
        'observacion'
    ];
    
    public function categoria(): BelongsTo
    {
        return $this->belongsTo(Categoria::class);
    }

=======

class Idea extends Model
{

protected $fillable = [
 'titulo',
 'descripcion',
 'estado',
 'autor',
 'categoria_id'
 ];
 
    public function categoria() : BelongsTo
    {
        return $this->belongsTo(Categoria::class);
    }
>>>>>>> e77b7be8b63c743d78991f74e11d2a1588823968
}
