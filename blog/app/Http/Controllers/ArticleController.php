<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{

    public function index()
    {

        // 1. Récuperer depuis la BDD les articles
        $articles  = [
            "articles" => [
                [
                    "id" => 1,
                    "title" => "Architecture MVC",
                    "content" => "Lorem Ipsum MVC...",
                    "user_id" => 3
                ],
                [
                    "id" => 2,
                    "title" => "Tailwind CSS",
                    "content" => "Lorem Ipsum Tailwind...",
                    "user_id" => 1
                ]
            ]
        ];
        // 2. Retourner la vue avec les articles
        return view('articles.index', $articles);
    }
    public function show($id)
{
    $articles = article::all(;
    $selectedArticle = null;

    foreach ($articles as $article) {
        if ($article->id == $id) {
            $selectedArticle = $article;
            break;
        }
    }

    if (!$selectedArticle) {
        return response()->json(['message' => 'Article not found'], 404);
    }

    return response()->json($selectedArticle);
}
}
