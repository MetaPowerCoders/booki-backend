<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function getRouteKeyName(){
       return 'uuid';
     }

    public $incrementing = false;

    public function getKeyType ()
    {
        return 'string';
    }
}
