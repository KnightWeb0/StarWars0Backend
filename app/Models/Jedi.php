<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jedi extends Model
{
    use HasFactory;


          //just for testing but stops mass assignment error
          protected $guarded = [];


       //one to one relationship, a Jedi Knight has one padwan
          public function Padwan(){
            return $this->hasOne(Padwan::class);
          }


}
