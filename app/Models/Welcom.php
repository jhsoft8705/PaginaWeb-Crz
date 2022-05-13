<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Welcom extends Model
{
    //use HasFactory;
     //protected $guarded=[];
   protected $table="cliente_migrate";
   protected $primaryKey="id";
   protected $fillable=['nombre','telefono','email','comentario'];

    //public $timestamps=false;

}
