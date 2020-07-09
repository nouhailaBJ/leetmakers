<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $table = "projects";

    protected $fillable = [
    	'title' , 'project_description', 'tags', 'startedAt', 'endedAt','image'
    ];
}
