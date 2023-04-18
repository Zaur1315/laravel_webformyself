<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 *Class Country
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */

class Rubric extends Model
{
    use HasFactory;

    public function posts()
    {
        return $this->hasMany(Post::class);
    }


}
