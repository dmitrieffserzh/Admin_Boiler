<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class News extends Model {

    public $type = 'news';

    protected $table = 'con_news';

    public $fillable = [
        'title',
        'content',
        'author_id',
        'category_id',
        'published',
        'created_at',
        'updated_at'
    ];

    public $dates = [
        'created_at',
        'updated_at'
    ];


    public function getLikedAttribute() {
        $like = $this->like()->where('user_id', Auth::id())->first();
        return !is_null($like);
    }




    // RELATIONS
    public function taxonomy() {
        return $this->belongsTo(Taxonomy::class, 'taxonomy_id');
    }


//    public function owner() {
//        return $this->belongsTo(User::class, 'user_id');
//    }
//
//    public function like() {
//        return $this->morphMany(Like::class, 'content');
//    }
}