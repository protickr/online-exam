<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\QuestionSet;

class Exam extends Model
{
    use HasFactory;

    protected $fillable = ['negative_marking', 'exam_duration'];

    public function questionSet(){
        return $this->hasOne(QuestionSet::class, 'exam_id');
    }
}
