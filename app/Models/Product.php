<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'category_id',
        'name',
        'description',
        'exclusive'
    ];


    protected $dates = [
        'deleted_at'
    ];

    public function category() {
        return $this->belongsTo(Category::class);
    }
}
