<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sermon extends Model
{
    use HasFactory;

    public function sermonAuthor(){
        return $this->belongsTo(User::class, 'uploaded_by');

    }
    public function sermonCategory(){
        return $this->belongsTo(SermonCategory::class, 'sermon_category_id');
    }
    public function sermonSeries(){
        return $this->belongsTo(SermonSerie::class, 'sermon_series_id');
    }
    public function speaker(){
        return $this->belongsTo(Speaker::class, 'speaker_id');
    }


}
