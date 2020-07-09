<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JoinUs extends Model
{
   protected $table = 'join_us';
   protected $fillable  = 
   [
  'first_name','last_name','intra','number','exp_robotic','description','email'
   ];
}
