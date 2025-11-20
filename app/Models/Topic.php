<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\Question;

class Topic extends Model
{
    //

    protected $fillable = ['id', 'title', 'user_id'];
    public function questions(): HasMany
    {
        return $this->hasMany(Question::class);

    }
}
