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
    public function createArticle(Request $request, $api)
    {
        $article = Article::create($request->all());

        if ($api) {
            return response()->json($article);
        } else {
            return $article;
        }
    }

    public function deleteArticle($id, $api)
    {
        $article = Article::findOrFail($id);

        $article->delete();

        if ($api){
            return response()->json('success');
        } else {
            return 'success';
        }
    }

    public function updateArticle(Request $request, $id, $api)
    {
        $article = Article::findOrFail($id);

        $article->title = $request->input('title');
        $article->content = $request->input('content');

        $article->save();

        if ($api) {
            return response()->json($article);
        } else {
            return $article;
        }
    }

}