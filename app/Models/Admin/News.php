<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class News extends Model {

    protected $table = 'con_news';

    public $fillable = [
        'user_id',
        'taxonomy_id',
        'title',
        'slug',
        'content',
        'image'
    ];



    // RELATIONS
    public function taxonomy () {
        return $this->belongsTo(Taxonomy::class);
    }

}
