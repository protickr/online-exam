<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Exam;
use App\Models\Question;

class QuestionSet extends Model
{
    use HasFactory;

    protected $fillable = ['exam_id', 'question_id', 'question_mark'];

    public function exam(){
        return $this->belongsTo(Exam::class, 'exam_id');
    }

    public function questions(){
        return $this->hasMany(Question::class, 'question_id');
    }
}
