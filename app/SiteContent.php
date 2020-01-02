<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SiteContent extends Model
{
    protected $attributes = [
    	'name' => null,
    	'page' => null,
    	'content' => null,
    ];
}
