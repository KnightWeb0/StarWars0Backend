<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Padwan extends Model
{
    use HasFactory;

          //just for testing but stops mass assignment error
          protected $guarded = [];


       //one to one relationship
      //the padwan belongs to the jedi master or knight
       public function Jedi() {
        return $this->belongsTo(Jedi::class);
    }

}
