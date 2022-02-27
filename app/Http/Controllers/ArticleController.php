<?php

namespace App\Http\Controllers;


use App\Http\Requests\ArticleRequest;
use App\Models\Article;
use App\Models\BlogCategory;
use App\Models\User;
use App\Models\Comment;
use App\Models\LoggableInterface;
use App\Services\ModelLogger;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\DB;
use Psr\Log\LoggerInterface;
use Illuminate\Routing\ResponseFactory;
use Illuminate\Http\JsonResponse; 
//use App\Http\Controllers\api\ArticleApiController;

class ArticleController extends Controller
{/** @var ResponseFactory */
    private $responseFactory;

    /**
     * @param ResponseFactory $responseFactory
     */
    public function __construct(ResponseFactory $responseFactory)
    {
        $this->responseFactory = $responseFactory;
    }

    
    public function show($articleId, Request $request, ModelLogger $logger)
    {
        $article = Article::findOrFail($articleId);
        $article->view_count++;
        $article->save();

        $logger->logModel($request->user(), $article);

        return view('article.article', ['article' => $article]);
    }

    public function create()
    {
        $categories = BlogCategory::all();

        $users = User::all();

        return view('article.create', [
            'categories' => $categories,
            'users' => $users,

        ]);
    }

    public function update($articleId, ArticleRequest $request): JsonResponse
    {
        $article = Article::find($articleId);

        return view('article.update', [
            'article' => $articles,

        ]);

        // if($article){
        //     try {
        //         $article->title = $request->title;
        //         $article->save();
        //         // Successfully updated
        //         return $this->responseFactory->json(['id' => $article->id], 200);
        //     } catch (\Throwable $e) {
        //         // Invalid update
        //         return $this->responseFactory->json(['error' => 'An error occurred when trying to update article!'], 200);
        //     }
        // }

        // // Not found
        // return $this->responseFactory->json(null, 404);
    }
}
