<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    protected $table = 'categories';

    public $timestamps = false;

    public function getProducts() {
        return $this->hasMany('App\Models\product', 'categoryId', 'id'); 
    }
}
