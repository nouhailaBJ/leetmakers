<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Suponsor extends Model
{
     protected $table = "suponsores";

    protected $fillable = [
    	'name', 'logo'];
}
