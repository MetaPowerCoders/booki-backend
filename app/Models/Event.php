<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $guarded = [];

    public $incrementing = false;

    public $incrementing = false;

    public function getKeyType ()
    {
        return 'string';
    }
}
