<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dtpsk extends Model
{
    protected $table = 'dtpsk';
    protected $fillable = ['p_title', 'p_desc', 'p_view', 'avail', 'user_id', 'hm_id'];
}
