<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class SlideCategory extends Model
{
	
    use SoftDeletes;

    protected $table = 'slide_category';
    
}
