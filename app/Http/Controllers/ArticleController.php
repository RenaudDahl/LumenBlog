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
    public function index($api)
    {
        $articles = Article::all();
        $output = array();

        foreach ($articles as $post) {
            $url = route('display', ['id' => $post->getId()]);
            $output[] = [$post->title, $url];
        }

        if ($api) {
            return response()->json($output);
        } else {
            return $output;
        }
    }

    public function getArticle($id, $api)
    {
        $article = Article::findOrFail($id);

        if ($api) {
            return response()->json($article);
        } else {
            return $article;
        }
    }

}