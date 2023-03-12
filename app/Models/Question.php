<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Answer;
use App\Models\QuestionSet;
class Question extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'answer_duration', 'multiple_answer'];
    public function answers(){
        return $this->hasMany(Answer::class, 'question_id');
    }

    // this method is not necessary
//    public function questionSet(){
//        return $this->belongsTo(QuestionSet::class, 'question_id');
//    }
}
