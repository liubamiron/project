<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Requests\api\CreateArticleRequest;
use App\Models\Article;
use App\Models\User;
use App\Services\ModelLogger;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\ResponseFactory;
use Illuminate\Support\Str;

class ArticleApiController extends Controller
{
    /** @var ResponseFactory */
    private $responseFactory;

    /**
     * @param ResponseFactory $responseFactory
     */
    public function __construct(ResponseFactory $responseFactory)
    {
        $this->responseFactory = $responseFactory;
    }

    /**
     * Returns list of most popular articles
     *
     * @param ModelLogger $logger
     *
     * @return JsonResponse
     */
    public function readMostPopular(Request $request, ModelLogger $logger)
    {
        $mostPopularArticles = Article::all()
        ->sortByDesc('view_count')
        ->take($itemCount = 4);

        $articleArray = [];
        foreach ($mostPopularArticles as $article) {
            // $articlesArray[] = $article->toJson();
            $articlesArray[] = [
                'id' => $article->id,
                'title' => $article->title,
                'excerpt' => $article->excerpt,
                'view_count' => $article->view_count,
                'image_url'=>$article->image_url,
            ];
        }
        return $this->responseFactory->json($articlesArray);

        // echo '[' .implode(',' , $articlesArray) . ']';
        //echo json_encode($articlesArray);
    }

    public function readAllArticles(): JsonResponse
    {
        $allArticles = Article::all()
            ->sortByDesc('id');

        $articlesArray = [];
        foreach ($allArticles as $article) {
            $articlesArray[] = [
                'id' => $article->id,
                'title' => $article->title,
                'description' => $article->desription,
                'view_count' => $article->view_count,
                'image'=>$article->image_url,
            ];
        }

        return $this->responseFactory->json($articlesArray);
    }


    /**
     * Reads one articles from provided article id.
     *
     * @param $id
     *
     * @return JsonResponse
     */
    public function readOneArticle($id): JsonResponse
    {
        $article = Article::find($id);

        if ($article) {
            return $this->responseFactory->json($article);
        }

        return $this->responseFactory->json(null, 404);
    }

    /**
     * Creates new article from provided data
     *
     * @param Request $request
     *
     * @return JsonResponse
     */
    public function createArticle(Request $request, ModelLogger $logger): JsonResponse
    {

        // not the best validation logic
        // if ($request->input('title') === 'some') {
        //     return $this->responseFactory->json(['message' => 'incorrect title'], 400);
        // }

        // dd($request->all());

        $article = Article::create([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'author_id' => $request->input('user'),
            'image' => $request->file('image')->store('/', 'public'),
            'excerpt' => Str::limit($request->input('description')),
            'category_id' => $request->input('category'),
            'seo_title' => $request->input('title'),
            'seo_description' => Str::limit($request->input('description'), 200),
        ]);

        return $this->responseFactory->json(['id' => $article->id], 201);
    }

    //update article

    public function update($articleId, ArticleRequest $request): JsonResponse
    {
        $article = Article::find($articleId);
        if($article){
            try {
                $article->title = $request->title;
                $article->save();
                // Successfully updated
                return $this->responseFactory->json(['id' => $article->id], 200);
            } catch (\Throwable $e) {
                // Invalid update
                return $this->responseFactory->json(['error' => 'An error occurred when trying to update article!'], 200);
            }
        }

        // Not found
        return $this->responseFactory->json(null, 404);
    }


    /**
     * Deletes article resource from provided id
     *
     * @param $id
     *
     * @return JsonResponse
     */
    public function deleteArticle($id): JsonResponse
    {
        $article = Article::find($id);

        if ($article) {
            $article->delete();

            return $this->responseFactory->json(null, 204);
        }

        return $this->responseFactory->json(null, 404);
    }
}
