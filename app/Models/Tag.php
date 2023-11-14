<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use mysql_xdevapi\Collection;

class Tag extends Model
{
    use HasFactory;
    public static function show_all_tags()
    {
        return Tag::select('title')->get();
    }
    public function articles(): belongsToMany
    {
        return $this->belongsToMany(Article::class, 'article_tag', 'tag_id', 'article_id');
    }
}
