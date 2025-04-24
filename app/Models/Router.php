<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Router extends Model
{
    use HasFactory;
    use HasFactory;
    protected $table = 'routes';
    protected $fillable = [
        'url',
        'image',
        'title',
    ];
}
