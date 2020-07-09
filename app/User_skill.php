<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User_skill extends Model
{
      protected $table = "user_skill";

    protected $fillable = [
    	'userID', 'SkillID', 'percentage'];
}
