<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Images extends Model
{
   protected $table = 'images';
    public function cms()
    {
        return $this->belongsTo('App\Cms');
    }
}
