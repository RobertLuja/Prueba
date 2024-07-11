<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;
    protected $table = 'categoria';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $guarded = [];

    public function productos() {
        return $this->hasMany(Producto::class, "id_categoria");
    }
}
