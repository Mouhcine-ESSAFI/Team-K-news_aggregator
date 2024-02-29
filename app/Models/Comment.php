<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = [
        'content',
        'created_by',
        'post_id',
    ];
    protected $table = 'commentaire';

    public function user()
    {
        return $this->belongsTo(User::class, 'created_by');
    }

}
