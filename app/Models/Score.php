<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Score extends Model
{
    protected $fillable = [
        'id', 
        'topic_id', 
        'name', 
        'number_of_questions', 
        'number_of_correct'
    ];    
}
