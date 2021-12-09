<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tarea extends Model
{
    protected $fillable = ['code', 'name', 'edificio', 'description'];

    public function cat()
    {
        return $this->hasOne(Category::class, 'id',);
    }
}
