<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Projects extends Model
{
    protected $fillable = [
        'name',
        'desc',
        'link',
        'percent_complete',
        'last_updated',
    ];
}
