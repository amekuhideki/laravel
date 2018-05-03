<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    protected $guarded = ['id', 'created_at'];

    use SoftDeletes;
    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];

    public function category() {
        return $this->belongsTo(Category::class);
    }
}
