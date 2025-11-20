<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $fillable = [
        'id', 
        'topic_id', 
        'question', 
        'answer1', 
        'answer2',
        'answer3',
        'answer4', 
        'correct', 
        'comment'
    ];
}
