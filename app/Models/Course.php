<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    protected $primaryKey = 'course_id';
    protected $guarded = [];
    public function chauffeur()
    {
        return $this->belongsTo(Chauffeur::class, 'chauffeur_id', 'chauffeur_id');
    }
}
