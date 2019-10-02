<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cms extends Model 
{
    protected $table = 'cmss';
    protected $fillable = ['name','address','cost','description','owner','phoneowner', 'email', 'picroute'];

    public function images()
    {
        // This is referencing the images mode, btw
        return $this->hasMany('App\Images');
    }
}
