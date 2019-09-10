<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Settings extends Model
{
    protected $fillable = [
    	'siteName',
    	'logo',
    	'favicon',
    	'about',
    	'address',
    	'phone',
    	'email',
    	'facebook',
    	'twitter',
    	'youtube',
    	'linkedin',
    	'googleplus'
    ];
}
