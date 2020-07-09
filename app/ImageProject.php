<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ImageProject extends Model
{
   protected $table = 'image_project';
   protected $fillable  = 
   [
   	'projectID','image'
   ];
}
