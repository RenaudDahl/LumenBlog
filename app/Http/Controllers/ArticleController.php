<?php
/**
 * Created by PhpStorm.
 * User: renaud
 * Date: 30/06/15
 * Time: 17:48
 */

namespace App\Http\Controllers;

use App\Models\Article;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::all();
        $output = '';

        foreach ($articles as $post) {
            $output .= $post->title;
            $output .= ' ';
        }

        return response()->json($output);
    }

    public function getArticle($id)
    {
        $article = Article::findOrFail($id);

        return response()->json($article);
    }

}