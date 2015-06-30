<?php
/**
 * Created by PhpStorm.
 * User: renaud
 * Date: 30/06/15
 * Time: 17:48
 */

namespace App\Http\Controllers;

use App\Models\Article;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::all();

        return response()->json($articles);
    }

    public function getArticle($id)
    {
        $article = Article::findOrNew($id);

        return response()->json($article);
    }

    public function createArticle(Request $request)
    {
        $article = Article::create($request->all());

        return response()->json($article);
    }

    public function deleteArticle($id){
        $article  = Article::findOrNew($id);

        $article->delete();

        return response()->json('success');
    }

    public function updateArticle(Request $request,$id){
        $article  = Article::findOrNew($id);

        $article->title = $request->input('title');
        $article->content = $request->input('content');

        $article->save();

        return response()->json($article);
    }
}