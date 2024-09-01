<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SermonNote extends Model
{
    use HasFactory;

    public function sermon()
    {
        return $this->belongsTo(Sermon::class, 'sermon_id');
    }
}
