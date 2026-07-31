<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PageView extends Model
{
    protected $fillable = ['locale', 'page_key', 'path', 'viewed_on'];

    protected $casts = [
        'viewed_on' => 'date',
    ];
}
