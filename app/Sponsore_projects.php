<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sponsore_projects extends Model
{
    protected $table = "sponsore_projects";

    protected $fillable = [
    	'idProject', 'idSponsore'];

}
