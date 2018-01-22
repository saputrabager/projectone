<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dthm extends Model
{
    protected $table = 'dthm';
    protected $fillable = ['location', 'address', 'type', 'payment', 'cost', 'room', 'toilet', 'kitchen', 'garage'];
}