<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Autolink extends Model
{
    use HasFactory;
    protected $table = 'autolink';
    protected $fillable = [
        'link',
        ];
}
