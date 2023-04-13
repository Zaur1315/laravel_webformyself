<?php

namespace App\Models;

//use Illuminate\Database\Eloquent\Factories\HasFactory;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


/**
 *Class Country
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */

class Post extends Model
{
    use HasFactory;


    protected $fillable = ['title', 'content'];

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
        return Carbon::parse($this->created_at)->diffForHumans();
    }

}
