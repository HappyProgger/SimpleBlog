<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Article extends Model
{
    use HasFactory;

    protected $fillable = ['subject', 'body','created_at', 'updated_at'];
    public static function articles_for_main_page()
    {
        return Article::orderBy('created_at')->with('tags')->take(6)->get();
    }
    public static function articles_for_articles_page_with_paginaion()
    {
        return Article::orderBy('created_at')->with('tags')->paginate(10);
    }
    public static function get_article($id)
    {
        return Article::where("id",$id)->with('tags')->get();
    }
    public static function add_view_article($id)
    {
        sleep(5);
        $count_of_like = Article::where('id', $id)->select('counter_views')->get();
        $new_value_counter_likes = $count_of_like[0]['counter_views'] + 1;
        $article = Article::find($id);
        $article->counter_views = $new_value_counter_likes;
        $article->save();
        return response()->json(['status' => 'success']);
    }

    public function tags(): belongsToMany
    {
        return $this->belongsToMany(Tag::class, 'article_tag', 'article_id', 'tag_id');
    }
    public static function  increment_likes_of_article($id)
    {
        $count_of_like = Article::where('id', $id)->select('counter_likes')->get();
        $new_value_counter_likes = $count_of_like[0]['counter_likes'] + 1;
        $article = Article::find($id);
        $article->counter_likes = ( $new_value_counter_likes);
        $article->save();
        return $new_value_counter_likes;
    }
}
