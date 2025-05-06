<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SermonNote extends Model
{
    use HasFactory, SoftDeletes;

    public $guarded = ['id'];

    public function sermon()
    {
        return $this->belongsTo(Sermon::class, 'sermon_id');
    }
}
