<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    protected $table = 'categories';

    public function parent() {
        return $this->belongsTo(Categorie::class, 'parent_id');
    }

    public function childs() {
        return $this->hasMany(Categorie::class, 'parent_id');
    }

}