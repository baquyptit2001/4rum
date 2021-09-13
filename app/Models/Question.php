<?php

namespace App\Models;

use App\Models\User;
use App\Models\Answer;
use Illuminate\Mail\Markdown;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Question extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'body'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function setTitleAttribute($value)
    {
        $this->attributes['title'] = $value;
        $this->attributes['slug'] = str_slug($value);
    }

    public function getCreatedDateAttribute()
    {
        return $this->created_at->shortRelativeDiffForHumans();
    }

    public function getCreatedDateFullAttribute()
    {
        return $this->created_at->diffForHumans();
    }

    public function getUrlAttribute()
    {
        return route('questions.show', $this->slug);
    }

    public function getEditUrlAttribute()
    {
        return route('questions.edit', $this->id);
    }

    public function getAnswerStatusAttribute()
    {
        if ($this->answers > 0) {
            if ($this->best_answer_id != null) {
                return "answered-accepted";
            }
            return 'answered';
        }
    }

    public function getBodyHtmlAttribute()
    {
        return \Parsedown::instance()->text($this->body);
    }

    public function getBodySumAttribute()
    {
        return Markdown::parse($this->body);
        return \Parsedown::instance()
        ->setMarkupEscaped(true)
        ->text($this->body);
    }

    public function answer()
    {
        return $this->hasMany(Answer::class)->limit(3);
    }
}
