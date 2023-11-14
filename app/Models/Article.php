<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Article extends Model
{
    use HasFactory;

    protected $fillable = ['created_at', 'updated_at'];
    public static function articles_for_main_page()
    {
        return Article::orderBy('created_at')->take(6)->get();
    }
    public static function articles_for_articles_page_with_paginaion()
    {
        return Article::orderBy('created_at')->paginate(10);
    }

    public function tags(): belongsToMany
    {
        return $this->belongsToMany(Tag::class, 'article_tag', 'article_id', 'tag_id');
    }
}
