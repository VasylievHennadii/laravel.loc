<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

/**
 * Class Post
 * @package App
 * @mixin Builder
 */

class Post extends Model
{
    protected $fillable = ['title', 'content', 'rubric_id'];

    public function rubric()
    {
        return $this->belongsTo(Rubric::class);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    public function getPostDate()
    {
//        $formatter = new \IntlDateFormatter('ru_RU', \IntlDateFormatter::FULL, \IntlDateFormatter::FULL);
//        $formatter->setPattern('d MMM y');
//        return $formatter->format(new \DateTime($this->created_at));

        return Carbon::parse($this->created_at)->diffForHumans();
    }

    public function setTitleAttribute($value)
    {
        $this->attributes['title'] = Str::title($value);
    }

    public function getTitleAttribute($value)
    {
        return Str::upper($value);
    }

}
