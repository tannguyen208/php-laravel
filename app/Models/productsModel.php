<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class productsModel extends Model
{
     // kết nối đến bản products
     protected $table = 'products';


     public $timestamps = false;
 
     
     public function getCategory() {
         # $this->belongsTo('yourNameModel','foreign', 'primary');
         return $this->belongsTo('App\Models\category','categoryId', 'id');
     }
}
