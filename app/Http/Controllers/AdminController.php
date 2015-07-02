<?php
/**
 * Created by PhpStorm.
 * User: renaud
 * Date: 02/07/15
 * Time: 12:15
 */

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function createArticle(Request $request)
    {
        $article = Article::create($request->all());

        return response()->json($article);
    }

    public function deleteArticle($id)
    {
        $article = Article::findOrFail($id);

        $article->delete();

        return response()->json('success');
    }

    public function updateArticle(Request $request, $id)
    {
        $article = Article::findOrFail($id);

        $article->title = $request->input('title');
        $article->content = $request->input('content');

        $article->save();

        return response()->json($article);
    }

}