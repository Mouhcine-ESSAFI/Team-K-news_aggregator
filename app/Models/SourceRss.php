<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SourceRss extends Model
{
    use HasFactory;
    protected $table = 'source';

    protected $fillable = [
        'rss_link', 'name',
    ];
}
