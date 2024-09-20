<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SermonCategory extends Model
{
    use HasFactory;

    public $guarded = ['id'];

    public function sermons()
    {
        return $this->hasMany(Sermon::class, 'sermon_category_id');
    }
}
