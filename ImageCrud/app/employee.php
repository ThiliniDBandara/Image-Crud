<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class employee extends Model
{
    protected $table='employees';
    protected $fillable=['name','email','post','image'];
}
