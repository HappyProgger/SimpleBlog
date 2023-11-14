<?php

namespace App\Http\Controllers;

use App\Http\Requests\IncrementCounterLikesBlog;
use App\Models\Article;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use Inertia\Response;
class ArticleController extends Controller
{
     public function index()
{
    return Inertia::render('BlogsPage', [
        'articles' => Article::articles_for_articles_page_with_paginaion(),
        'tags' => Tag::show_all_tags(),
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
}
    public function show($id)
    {
        Article::add_view_article($id);

        return Inertia::render('BlogPage', [
            'article' => Article::get_article($id),
            'tags' => Tag::show_all_tags(),
            'canLogin' => Route::has('login'),
            'canRegister' => Route::has('register'),
            'laravelVersion' => Application::VERSION,
            'phpVersion' => PHP_VERSION,
        ]);
    }
    public function increment_count_likes($id)
    {
        $count_likes = Article::increment_likes_of_article($id);
        return response()->json(['likes' => $count_likes]);
    }
}
