<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SermonCategory extends Model
{
    use HasFactory, SoftDeletes;

    public $guarded = ['id'];

    public function sermons()
    {
        return $this->hasMany(Sermon::class, 'sermon_category_id');
    }
}
